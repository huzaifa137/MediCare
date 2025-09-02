<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userDashboard()
    {
        return view('dashboard');
    }

    public function userProfile()
    {
        return view('user.profile');
    }

    public function userLogin()
    {
        return view('user.login');
    }


    public function checkUser(Request $request)
    {
        // dd($request->all()); // Debugging line

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
        $url1 = '/student/dashboard';
        $chooseSchool = route('select.current.school');

        if ($userInfo->user_role == 5) {
            // Farmer/Student role

            $userExistsInSchool = DB::table('farmers')
                ->where('email', $userInfo->email)
                ->count();

            if ($userExistsInSchool > 1) {
                session(['login_email' => $userInfo->email]);

                return response()->json([
                    'status' => true,
                    'message' => 'Login successful',
                    'redirect_url' => $chooseSchool,
                ]);
            }

            $school_id = DB::table('farmers')->where('id', $userInfo->username)->value('school_id');

            $request->session()->put('LoggedStudent', $userInfo->id);
            $request->session()->put('LoggedSchool', $school_id);

            return response()->json([
                'status' => true,
                'message' => 'Login successful',
                'redirect_url' => $url1,
            ]);
        }

        if ($userInfo->user_role == 0) {
            $request->session()->put('LoggedStudent', $userInfo->id);

            return response()->json([
                'status' => true,
                'message' => 'Login successful',
                'redirect_url' => $url1,
            ]);
        }

        if ($userInfo->user_role == 1) {
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

}
