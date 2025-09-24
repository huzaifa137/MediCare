<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\ServiceCategory;
use App\Models\SubCategory;


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

        return response()->json([
            'message' => 'Doctor registered and user created.',
            'redirect_url' => url('/users/login?msg=success'),
        ]);

    }

    public function manageDoctors()
    {
        $doctors = Doctor::all();

        $metrics = [
            'totalDoctors' => $doctors->count(),
            'onlineDoctors' => $doctors->where('consultationMethod', 'online')->count(),
            'offlineDoctors' => $doctors->where('consultationMethod', 'offline')->count(),
            'bothConsultations' => $doctors->where('consultationMethod', 'both')->count(),

            'mostExperiencedDoctor' => $doctors->sortByDesc('experience')->first()?->fullName ?? 'N/A',
            'totalSpecializations' => $doctors->pluck('specialization')->unique()->count(),
            'uniqueLanguages' => collect($doctors->pluck('languages')->map(function ($langs) {
                return explode(',', $langs); // Assuming comma-separated
            }))->flatten()->unique()->count(),

            'averageFee' => $doctors->avg('consultationFee') ?? 0,
            'currency' => $doctors->first()?->currency ?? 'UGX',
        ];

        return view('doctors.all-doctors', compact('doctors', 'metrics'));
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
            'username' => $request->input('fullName'),
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
            'nationality' => $request->input('nationality'),
            'smoking_status' => $request->input('smokingStatus'),
            'allergies' => $request->input('allergies'),
            'emergency_relationship' => $request->input('emergencyRelationship'),
            'title' => 'Welcome to ' . Helper::app_name(),
        ];

        // Send the welcome email

        try {
            Mail::send('emails.patient-registered', ['data' => $emailData], function ($message) use ($emailData) {
                $message->to($emailData['email'])->subject($emailData['title']);
            });
        } catch (\Exception $e) {
            return response()->json(['message' => 'Patient registered, but email failed to send.'], 500);
        }

        return response()->json([
            'message' => 'Patient registered successfully!',
            'redirect_url' => url('/users/login?msg=success'),
        ]);
    }

    public function managePatients()
    {
        $patients = Patient::with('user')->get();

        $totalPatients = $patients->count();
        $maleCount = $patients->where('gender', 'male')->count();
        $femaleCount = $patients->where('gender', 'female')->count();
        $otherCount = $totalPatients - ($maleCount + $femaleCount);

        // Age calculation from DOB
        $averageAge = $patients->filter(fn($p) => $p->dob)
            ->map(function ($p) {
                return \Carbon\Carbon::parse($p->dob)->age;
            })->average() ?? 0;

        // Most common medical condition
        $commonCondition = collect($patients->pluck('medical_conditions')->filter())
            ->flatMap(function ($conditions) {
                return explode(',', strtolower($conditions));
            })->map('trim')->countBy()->sortDesc()->keys()->first() ?? 'N/A';

        $withInsurance = $patients->whereNotNull('insurance_provider')->count();

        // Consultation preference stats
        $consultationPrefs = [
            'online' => $patients->where('consultation_type', 'online')->count(),
            'offline' => $patients->where('consultation_type', 'offline')->count(),
            'both' => $patients->where('consultation_type', 'both')->count(),
        ];

        $metrics = [
            'totalPatients' => $totalPatients,
            'maleCount' => $maleCount,
            'femaleCount' => $femaleCount,
            'otherCount' => $otherCount,
            'averageAge' => round($averageAge),
            'commonCondition' => ucwords($commonCondition),
            'withInsurance' => $withInsurance,
            'consultationPrefs' => $consultationPrefs,
        ];

        return view('patients.all-patients', compact('patients', 'metrics'));
    }


    public function addPharmacy()
    {
        return view('pharmacy.add-pharmacy');
    }

    public function storeNewPharmacy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pharmacyName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:50',
            'licenseNumber' => 'required|string|max:100',
            'ownerName' => 'required|string|max:255',
            'contactPersonPhone' => 'required|string|max:50',
            'physicalAddress' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'loginUsername' => 'required|string|max:255|unique:users,username',
            'loginEmail' => 'required|email|max:255|unique:users,email',
            'password' => 'required',

            'pharmacyLicense' => 'required|file|mimes:jpg,jpeg,png,pdf',
            'ownerId' => 'required|file|mimes:jpg,jpeg,png,pdf',
            'storeFrontPhoto' => 'nullable|file|mimes:jpg,jpeg,png',
            'interiorPhoto' => 'nullable|file|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $pharmacyLicensePath = $request->file('pharmacyLicense')->store('documents/pharmacy_licenses', 'public');
        $ownerIdPath = $request->file('ownerId')->store('documents/owner_ids', 'public');
        $storeFrontPhotoPath = $request->hasFile('storeFrontPhoto') ? $request->file('storeFrontPhoto')->store('documents/store_fronts', 'public') : null;
        $interiorPhotoPath = $request->hasFile('interiorPhoto') ? $request->file('interiorPhoto')->store('documents/interiors', 'public') : null;

        $user = User::create([
            'name' => $request->pharmacyName,
            'username' => $request->loginUsername,
            'email' => $request->loginEmail,
            'password' => Hash::make($request->password),
            'user_role' => 4,
        ]);

        $pharmacy = Pharmacy::create([
            'user_id' => $user->id,
            'pharmacy_name' => $request->pharmacyName,
            'email' => $request->email,
            'phone_number' => $request->phoneNumber,
            'license_number' => $request->licenseNumber,
            'reg_authority' => $request->regAuthority,
            'years_in_op' => $request->yearsInOp,
            'date_registered' => $request->dateRegistered,
            'owner_name' => $request->ownerName,
            'owner_gender' => $request->ownerGender,
            'contact_person_phone' => $request->contactPersonPhone,
            'physical_address' => $request->physicalAddress,
            'city' => $request->city,
            'country' => $request->country,
            'postal_code' => $request->postalCode,
            'google_maps_link' => $request->googleMapsLink,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'opening_days' => $request->openingDays,
            'opening_hours' => $request->openingHours,
            'emergency_hours' => $request->has('emergencyHours'),
            'online_orders' => $request->has('onlineOrders'),
            'delivery_available' => $request->has('deliveryAvailable'),
            'service_areas' => $request->serviceAreas,

            'login_username' => $request->loginUsername,
            'login_email' => $request->loginEmail,
            'password' => Hash::make($request->password),

            'pharmacy_license_path' => $pharmacyLicensePath,
            'owner_id_path' => $ownerIdPath,
            'store_front_photo_path' => $storeFrontPhotoPath,
            'interior_photo_path' => $interiorPhotoPath,
        ]);

        $rawPassword = $request->password;

        $emailData = [
            'pharmacyName' => $request->pharmacyName,
            'email' => $request->loginEmail,
            'owner' => $request->ownerName,
            'phone' => $request->phoneNumber,
            'password' => $rawPassword,
            'title' => 'Welcome to ' . Helper::app_name(),
        ];

        try {
            Mail::send('emails.pharmacy-registered', ['data' => $emailData], function ($message) use ($emailData) {
                $message->to($emailData['email'])->subject($emailData['title']);
            });
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Pharmacy registered, but email failed to send.',
                'error' => $e->getMessage()
            ], 500);
        }

        return response()->json([
            'message' => 'Pharmacy registered successfully!',
            'redirect_url' => url('/users/login?msg=success'),
        ]);
    }

    public function managePharmacies()
    {
        $pharmacies = Pharmacy::all();

        $metrics = [
            'totalPharmacies' => $pharmacies->count(),
            'withDelivery' => $pharmacies->where('delivery_available', true)->count(),
            'onlineOrders' => $pharmacies->where('online_orders', true)->count(),
            'emergencyHours' => $pharmacies->where('emergency_hours', true)->count(),
            'uniqueCities' => $pharmacies->pluck('city')->unique()->count(),
            'uniqueCountries' => $pharmacies->pluck('country')->unique()->count(),
            'avgYearsInOperation' => round($pharmacies->avg('years_in_op'), 1),
            'latestRegistered' => $pharmacies->sortByDesc('created_at')->first()?->pharmacy_name ?? 'N/A',
        ];

        return view('pharmacy.all-pharmacies', compact('pharmacies', 'metrics'));
    }

    public function webUIServices()
    {
        $services = ServiceCategory::all();

        return view('web-ui-setup.services', compact('services'));
    }

    public function storeServices(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->move(public_path('images'), $imageName);
        }

        ServiceCategory::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => 'images/' . $imageName,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Service category added successfully!',
        ]);
    }

    public function deleteServices($id)
    {
        $service = ServiceCategory::find($id);

        if ($service) {

            if (file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }

            $service->delete();
            return response()->json(['success' => true, 'message' => 'Service deleted successfully!']);
        }

        return response()->json(['success' => false, 'message' => 'Service not found.']);
    }

    public function addSubCategory(Request $request, $serviceCategoryId)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
        }

        $subCategory = SubCategory::create([
            'service_category_id' => $serviceCategoryId,
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
        ]);

        return response()->json(['success' => true, 'subCategory' => $subCategory]);
    }
}
