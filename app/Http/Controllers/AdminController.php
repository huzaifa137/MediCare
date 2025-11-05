<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Pharmacy;
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
        $totalUsers = User::count();
        $adminsCount = User::where('user_role', 1)->count();
        $doctorsCount = User::where('user_role', 2)->count();
        $patientsCount = User::where('user_role', 3)->count();
        $pharmaciesCount = User::where('user_role', 4)->count();

        $pendingAccounts = User::where('account_status', 0)->count();
        $activeAccounts = User::where('account_status', 10)->count();

        $doctors = Doctor::all();
        $onlineDoctors = $doctors->where('consultationMethod', 'online')->count();
        $offlineDoctors = $doctors->where('consultationMethod', 'offline')->count();
        $bothDoctors = $doctors->where('consultationMethod', 'both')->count();
        $avgDoctorFee = round($doctors->avg('consultationFee') ?? 0, 2);
        $docCurrency = $doctors->first()?->currency ?? 'UGX';

        $patients = Patient::all();
        $avgPatientAge = round(
            $patients
                ->filter(fn($p) => $p->dob)
                ->map(fn($p) => \Carbon\Carbon::parse($p->dob)->age)
                ->average() ?? 0
        );
        $patientsWithInsurance = $patients->whereNotNull('insurance_provider')->count();

        $pharmacies = Pharmacy::all();
        $pharmaciesWithDelivery = $pharmacies->where('delivery_available', true)->count();
        $pharmaciesWithOnlineOrders = $pharmacies->where('online_orders', true)->count();

        $latestUser = User::latest()->first();
        $latestDoctor = $doctors->sortByDesc('created_at')->first()?->fullName ?? 'N/A';
        $latestPatient = $patients->sortByDesc('created_at')->first()?->full_name ?? 'N/A';
        $latestPharmacy = $pharmacies->sortByDesc('created_at')->first()?->pharmacy_name ?? 'N/A';

        $metrics = [
            'totalUsers' => $totalUsers,
            'adminsCount' => $adminsCount,
            'doctorsCount' => $doctorsCount,
            'patientsCount' => $patientsCount,
            'pharmaciesCount' => $pharmaciesCount,
            'pendingAccounts' => $pendingAccounts,
            'activeAccounts' => $activeAccounts,

            'onlineDoctors' => $onlineDoctors,
            'offlineDoctors' => $offlineDoctors,
            'bothDoctors' => $bothDoctors,
            'avgDoctorFee' => $avgDoctorFee,
            'docCurrency' => $docCurrency,

            'avgPatientAge' => $avgPatientAge,
            'patientsWithInsurance' => $patientsWithInsurance,

            'pharmaciesWithDelivery' => $pharmaciesWithDelivery,
            'pharmaciesWithOnlineOrders' => $pharmaciesWithOnlineOrders,

            'latestUser' => $latestUser?->name ?? 'N/A',
            'latestDoctor' => $latestDoctor,
            'latestPatient' => $latestPatient,
            'latestPharmacy' => $latestPharmacy,
        ];

        return view('admin.dashboard', compact('metrics'));
    }

    public function patientsDashboard()
    {
        return view('patients.dashboard');
    }

    public function pharmaciesDashboard()
    {
        return view('pharmacy.dashboard');
    }

    public function doctorsDashboard()
    {
        return view('doctors.dashboard');
    }

    public function deliveryDashboard()
    {
        return view('delivery.dashboard');
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

    public function index()
    {
        return view('Site.index');
    }

    public function allAdmins()
    {
        $admins = User::where('user_role', 1)->get();

        $metrics = [
            'totalUsers' => User::count(),
            'admins' => User::where('user_role', 1)->count(),
            'doctors' => User::where('user_role', 2)->count(),
            'pharmacies' => User::where('user_role', 4)->count(),
            'pendingUsers' => User::where('account_status', 0)->count(),
            'activeUsers' => User::where('account_status', 10)->count(),
        ];

        return view('admin.all-admins', compact('admins', 'metrics'));
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
        $admin = User::findOrFail($id);
        $admin->delete();

        return response()->json(['success' => true]);
    }

    public function changeStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:0,8,9,10'
        ]);

        $admin = User::findOrFail($id);
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
                // 'string',
                // 'min:8',
                // 'regex:/[a-z]/',
                // 'regex:/[A-Z]/',
                // 'regex:/\d/',
                // 'regex:/[\W_]/',
            ],
        ];

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

        // User roles
// ----------------------------------------------
// Admin    === 1 → /users/dashboard
// Doctor   === 2 → /doctors-dashboard
// Patient  === 3 → /patients-dashboard
// Pharmacy === 4 → /pharmacies-dashboard
// DeliveryGuy === 5 → /pharmacies-dashboard

        $allowedRoles = [1, 2, 3, 4, 5];

        if (in_array($userInfo->user_role, $allowedRoles)) {
            $request->session()->put('LoggedAdmin', $userInfo->id);

            // Determine redirect based on role
            switch ($userInfo->user_role) {
                case 1:
                    $redirectUrl = route('user.dashboard');
                    break;
                case 2:
                    $redirectUrl = route('doctors.dashboard');
                    break;
                case 3:
                    $redirectUrl = route('patients.dashboard');
                    break;
                case 4:
                    $redirectUrl = route('pharmacies.dashboard');
                    break;
                case 5:
                    $redirectUrl = route('delivery.dashboard');
                    break;
                default:
                    $redirectUrl = route('user.dashboard');
            }

            return response()->json([
                'status' => true,
                'message' => 'Login successful',
                'redirect_url' => $redirectUrl,
            ]);
        }

    }


    public function flushSession()
    {
        session()->flush();
        return redirect('/');
    }


    public function demoDashboard()
    {
        return view('demoDashboard');
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

    public function createNewPassword($id)
    {
        $generated_id = url('password/reset/' . $id);
        $resetEntry = DB::table('password_reset_tables')->where('token', $generated_id)->first();

        if ($resetEntry) {
            if ($resetEntry->link_status == 0) {
                if (now()->diffInMinutes($resetEntry->created_at) <= 30) {
                    return view('admin.reset-password-2', compact(['generated_id']));
                } else {
                    return redirect()->route('reset-password-access-link')->with('fail', 'This reset password link has expired');
                }
            } else {
                return redirect()->route('reset-password-access-link')->with('fail', 'This link has already been used, request for a new link');
            }
        } else {

            return redirect()->route('reset-password-access-link')->with('fail', 'Invalid link');
        }
    }

    public function store_new_password(Request $request)
    {
        // $request->validate(
        //     [
        //         'password' => [
        //             'required',
        //             'string',
        //             'min:6',
        //             'regex:/[A-Z]/',
        //             'regex:/[a-z]/',
        //             'regex:/[0-9]/',
        //             'regex:/[@$!%*?&#]/',
        //             'confirmed'
        //         ],
        //     ],
        //     [
        //         'password.required' => 'The password field is required.',
        //         'password.string' => 'The password must be a string.',
        //         'password.min' => 'The password must be at least 6 characters.',
        //         'password.regex' => 'The password must include at least one uppercase letter, one lowercase letter, one digit, and one special character.',
        //         'password.confirmed' => 'Passwords do not match.'
        //     ],
        // );

        $request->validate(
            [
                'password' => ['required', 'confirmed'],
            ],
            [
                'password.required' => 'The password field is required.',
                'password.confirmed' => 'Passwords do not match.',
            ],
        );

        $password = $request->password;
        $confirm = $request->password_confirmation;
        $generated_id = $request->generated_id;

        if ($password == $confirm) {

            $record = DB::table('password_reset_tables')->where('token', $generated_id)->first();
            $record_id = $record->id;
            $user_email = $record->email;

            $new_password = Hash::make($password);

            DB::table('users')
                ->where('email', $user_email)
                ->update(['password' => $new_password]);

            $post = password_reset_table::find($record_id);
            $post->link_status = 1;
            $post->save();

            $user = DB::table('users')
                ->where('email', $user_email)
                ->first();

            if ($user->registration_status == 0) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['registration_status' => 1]);
            }


            return redirect()->route('user.login')->with('success', 'Password has been updated successfully');
        } else {
            return back()->with('fail', 'Passwords do not match');
        }
    }

}
