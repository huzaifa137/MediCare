<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class DoctorsController extends Controller
{
    public function registerDoctors()
    {
        return view('doctors.register-doctor');
    }

    public function storeNewDoctor(Request $request)
    {
        $fullName = explode(' ', $request->input('fullName'), 2);
        $firstname = $fullName[0];
        $lastname = $fullName[1] ?? '';

        $username = strtolower($firstname . '.' . $lastname . rand(100, 999));

        $country = 'Uganda';

        $mergedRequest = $request->merge([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'phonenumber' => $request->input('phoneNumber'),
            'country' => $country,
            'password_confirmation' => $request->input('confirmPassword'), // for Laravel's confirmed rule
        ]);

        $validator = Validator::make($mergedRequest->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'phonenumber' => 'required|string|max:20',
            'country' => 'required|string|in:Kenya,Uganda,Tanzania,Rwanda,Burundi',
            'gender' => 'nullable|in:male,female,other',

            'fullName' => 'required|string|max:255',
            'dob' => 'required|date',
            'licenseNumber' => 'required|string|max:255',
            'issuingBody' => 'required|string|max:255',
            'experience' => 'required|integer|min:0',
            'specialization' => 'required|string|max:255',
            'qualifications' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'languages' => 'required|string|max:255',
            'availableDays' => 'required|string|max:255',
            'timeSlots' => 'required|string|max:255',
            'consultationMethod' => 'required|string|in:online,offline,both',
            'consultationFee' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'maxPatients' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $request->except('confirmPassword', 'password_confirmation');
        $rawPassword = $data['password'];
        $data['password'] = Hash::make($rawPassword);
        $doctor = Doctor::create($data);

        $user = User::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'email' => $request->email,
            'password' => Hash::make($rawPassword),
            'phonenumber' => $request->phoneNumber,
            'country' => $country,
            'gender' => $request->gender,
            'user_role' => 2,
            'account_status' => 10,
            'registration_status' => 1,
        ]);

        $emailData = [
            'fullName' => $doctor->fullName,
            'email' => $doctor->email,
            'phoneNumber' => $doctor->phoneNumber,
            'gender' => $doctor->gender,
            'dob' => $doctor->dob,
            'licenseNumber' => $doctor->licenseNumber,
            'issuingBody' => $doctor->issuingBody,
            'experience' => $doctor->experience,
            'specialization' => $doctor->specialization,
            'password' => $rawPassword,
            'title' => 'Welcome to ' . Helper::app_name(),
        ];

        try {
            Mail::send('emails.doctor-registered', ['data' => $emailData], function ($message) use ($emailData) {
                $message->to($emailData['email'])->subject($emailData['title']);
            });
        } catch (\Exception $e) {
            return response()->json(['message' => 'Doctor registered, but email failed to send.'], 500);
        }

        return response()->json(['message' => 'Doctor registered and user created.']);
    }

    public function manageDoctors()
    {
        $admins = User::where('user_role', 2)->get();

        return view('doctors.all-doctors', compact('admins'));
    }

    public function registerPatients()
    {
        return view('patients.register-patients');
    }

    public function storeNewPatient(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phoneNumber' => 'required|string|max:25',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name' => $request->input('fullName'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_role' => 3,
        ]);

        Patient::create([
            'user_id' => $user->id,
            'full_name' => $request->input('fullName'),
            'phone_number' => $request->input('phoneNumber'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'nationality' => $request->input('nationality'),
            'medical_conditions' => $request->input('medicalConditions'),
            'allergies' => $request->input('allergies'),
            'medications' => $request->input('medications'),
            'smoking_status' => $request->input('smokingStatus'),
            'alcohol_consumption' => $request->input('alcoholConsumption'),
            'recent_surgeries' => $request->input('recentSurgeries'),
            'consultation_type' => $request->input('consultationType'),
            'preferred_doctor_gender' => $request->input('doctorGender'),
            'preferred_language' => $request->input('preferredLanguage'),
            'best_time' => $request->input('bestTime'),
            'emergency_name' => $request->input('emergencyName'),
            'emergency_relationship' => $request->input('emergencyRelationship'),
            'emergency_phone' => $request->input('emergencyPhone'),
            'emergency_email' => $request->input('emergencyEmail'),
            'insurance_provider' => $request->input('insuranceProvider'),
            'insurance_id' => $request->input('insuranceId'),
            'referred_by' => $request->input('referredBy'),
        ]);

        // Prepare email data
        $emailData = [
            'fullName' => $request->input('fullName'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'title' => 'Welcome to ' . (class_exists(Helper::class) ? Helper::app_name() : 'MediCare'),
        ];

        // Send the welcome email
        try {
            Mail::send('emails.doctor-registered', ['data' => $emailData], function ($message) use ($emailData) {
                $message->to($emailData['email'])
                    ->subject($emailData['title']);
            });
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Patient registered, but email failed to send.',
                'error' => $e->getMessage(),
            ], 500);
        }

        return response()->json([
            'message' => 'Patient registered successfully!',
            'redirect_url' => route('user.dashboard'),
        ]);
    }


}
