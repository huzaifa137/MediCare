<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\password_reset_table;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function userProfile()
    {
        $admin = DB::table('users')->where('id', Session('LoggedAdmin'))->first();

        return view('admin.profile', compact(['admin']));
    }

    public function userLogin()
    {
        return view('admin.login');
    }

    public function addAdmin()
    {
        return view('admin.add-admin');
    }

    public function addAdmins()
    {
        $admins = User::where('user_role', 1)->get();
        return view('admin.all-admins', compact('admins'));
    }

    public function forgotPassword()
    {
        return view('admin.forgot-password');
    }

    public function editAdmin(User $admin)
    {
        return response()->json($admin);
    }


    public function updateAdmin(Request $request, User $admin)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username,' . $admin->id,
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'phonenumber' => 'required|string|max:20',
            'country' => 'required|in:Kenya,Uganda,Tanzania,Rwanda,Burundi',
            'gender' => 'nullable|in:male,female,other',
        ]);

        $admin->update($request->only([
            'firstname',
            'lastname',
            'username',
            'email',
            'phonenumber',
            'country',
            'gender'
        ]));

        return response()->json(['status' => true, 'message' => 'Admin updated successfully!']);
    }


    public function destroy($id)
    {
        $admin = User::where('user_role', 1)->findOrFail($id);
        $admin->delete();

        return response()->json(['success' => true]);
    }

    public function changeStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:0,8,9,10'
        ]);

        $admin = User::where('user_role', 1)->findOrFail($id);
        $admin->account_status = $validated['status'];
        $admin->save();

        return response()->json(['message' => 'Account status updated.']);
    }


    public function checkUser(Request $request)
    {

        $emailOrUsername = $request->input('email');

        $isEmail = str_contains($emailOrUsername, '@');

        $rules = [
            'email' => ['required'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/\d/',
                'regex:/[\W_]/',
            ],
        ];

        // If it's an email, apply email format validation
        if ($isEmail) {
            $rules['email'][] = 'email';
            $rules['email'][] = 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        }

        $request->validate($rules);

        $userInfo = User::where($isEmail ? 'email' : 'username', $emailOrUsername)->first();

        if (!$userInfo) {
            return response()->json([
                'status' => false,
                'message' => 'We don’t recognize the provided credentials.',
            ]);
        }

        if (!Hash::check($request->password, $userInfo->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid password or credentials.',
            ]);
        }

        $statusMessages = [
            0 => 'Your account has been banned.',
            8 => 'Your account is locked.',
            9 => 'Your account is suspended.',
        ];

        if ($userInfo->account_status != 10) {
            $message = $statusMessages[$userInfo->account_status] ?? 'Your account is not active.';

            return response()->json([
                'status' => false,
                'message' => $message,
            ]);
        }

        // Role-based redirection
        $url1 = '/users/dashboard';

        if ($userInfo->user_role == 1) {

            // Admin login basing on role
            $request->session()->put('LoggedAdmin', $userInfo->id);

            return response()->json([
                'status' => true,
                'message' => 'Login successful',
                'redirect_url' => $url1,
            ]);

        }

        // Fallback
        return response()->json([
            'status' => false,
            'message' => 'User role not recognized.',
        ]);
    }


    public function flushSession()
    {
        session()->flush();
        return redirect('/');
    }


    public function userLogout()
    {
        if (session()->has('LoggedAdmin')) {
            session()->flush();
            return redirect('/');
        } else {
            return redirect('/');
        }
    }


    public function storeAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:6',
            'phonenumber' => 'required|string|max:20',
            'country' => 'required|string|in:Kenya,Uganda,Tanzania,Rwanda,Burundi',
            'gender' => 'nullable|in:male,female,other',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phonenumber' => $request->phonenumber,
            'country' => $request->country,
            'gender' => $request->gender,
            'user_role' => 1, // Admin
            'account_status' => 10,
            'registration_status' => 1,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Admin created successfully!',
        ]);
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'newPassword' => [
                'required',
                'string',
                'min:8',
                'regex:/[A-Z]/',
                'regex:/[^a-zA-Z0-9]/'
            ],
            'confirmPassword' => 'required|same:newPassword'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed.',
                'errors' => $validator->errors()
            ], 422);
        }

        $adminId = session('LoggedAdmin');
        $user = \App\Models\User::find($adminId);

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found.'
            ], 404);
        }

        $user->password = Hash::make($request->newPassword);
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Password changed successfully.'
        ]);
    }

    public function generateForgotPasswordLink(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.exists' => 'The email provided is not registered in the system.',
        ]);

        $email = $request->email;
        $user = User::where('email', $email)->first();

        if (!$user) {
            return back()->withInput()->with('fail', 'The email provided is not registered in the system.');
        }

        $token = Str::random(60);
        $resetUrl = url('password/reset', $token);

        $post = new password_reset_table();
        $post->email = $email;
        $post->token = $resetUrl;
        $post->created_at = now();
        $post->save();

        $data = [
            'email' => $email,
            'username' => $user->username,
            'resetUrl' => $resetUrl,
            'title' => Helper::app_name() . ' : Reset Password Link',
        ];

        Mail::send('emails.reset_email', $data, function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });

        return back()->with('success', 'A password reset link has been sent to your email: ' . $email);
    }

}
