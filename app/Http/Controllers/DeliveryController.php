<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Delivery;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class DeliveryController extends Controller
{
    public function EnrollPersonnel()
    {
        return view('delivery.enroll-personnel');
    }

    public function storeDeliveryPersonnel(Request $request)
    {
        // 🔹 Step 1: Split Full Name
        $fullName = explode(' ', trim($request->input('fullName')), 2);
        $firstname = $fullName[0] ?? '';
        $lastname = $fullName[1] ?? '';

        $country = 'Uganda';

        // 🔹 Step 2: Validate input fields
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'phoneNumber' => 'required|string|max:20',
            'gender' => 'nullable|in:male,female,other',

            'vehicleType' => 'nullable|string|max:50',
            'vehicleNumber' => 'nullable|string|max:100',
            'vehicleInsurance' => 'nullable|string|max:255',

            'bankName' => 'nullable|string|max:255',
            'accountNumber' => 'nullable|string|max:255',

            'availableDays' => 'nullable|string|max:255',
            'availableHours' => 'nullable|string|max:255',

            'governmentId' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
            'backgroundCheck' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
            'trainingCert' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',

            'username' => 'required|string|unique:users,username|max:255',
            'loginEmail' => 'required|email|same:email',
            'password' => 'required|string|min:8',
            'confirmPassword' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        // 🔹 Step 3: Create User
        $user = User::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phonenumber' => $request->phoneNumber,
            'country' => $country,
            'gender' => $request->gender,
            'user_role' => 5, // delivery personnel
            'account_status' => 10,
            'registration_status' => 1,
        ]);

        // 🔹 Step 4: Handle File Uploads
        $paths = [];
        foreach (['governmentId', 'backgroundCheck', 'trainingCert'] as $fileField) {
            if ($request->hasFile($fileField)) {
                $paths[$fileField] = $request->file($fileField)->store("uploads/delivery/$fileField", 'public');
            }
        }

        // 🔹 Step 5: Store Delivery Info
        $delivery = Delivery::create([
            'user_id' => $user->id,
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'gender' => $request->gender,
            'vehicleType' => $request->vehicleType,
            'vehicleNumber' => $request->vehicleNumber,
            'vehicleInsurance' => $request->vehicleInsurance,
            'bankName' => $request->bankName,
            'accountNumber' => $request->accountNumber,
            'availableDays' => $request->availableDays,
            'availableHours' => $request->availableHours,
            'governmentIdPath' => $paths['governmentId'] ?? null,
            'backgroundCheckPath' => $paths['backgroundCheck'] ?? null,
            'trainingCertPath' => $paths['trainingCert'] ?? null,
        ]);

        $emailData = [
            'fullName' => $request->fullName,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'phoneNumber' => $request->phoneNumber,
            'gender' => $request->gender,
            'vehicleType' => $request->vehicleType,
            'vehicleNumber' => $request->vehicleNumber,
            'vehicleInsurance' => $request->vehicleInsurance,
            'availableDays' => $request->availableDays,
            'availableHours' => $request->availableHours,
        ];

        // 🔹 Step 6: Send Confirmation Email (optional)
        try {
            Mail::send('emails.delivery-guy-registered', ['data' => $emailData], function ($message) use ($emailData) {
                $message->to($emailData['email'])
                    ->subject('Welcome to ' . Helper::app_name());
            });
        } catch (\Exception $e) {
            \Log::error('Delivery registration email failed: ' . $e->getMessage());
        }

        // 🔹 Step 7: Respond to AJAX
        return response()->json([
            'message' => 'Delivery personnel registered successfully!',
            'redirect_url' => url('/users/login?msg=success')
        ]);
    }
}
