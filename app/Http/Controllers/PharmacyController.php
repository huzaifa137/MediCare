<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medicine;
use App\Models\MedicineImage;

class PharmacyController extends Controller
{
    public function addMedicine()
    {
        // Define categories as an array of associative arrays
        $categories = [
            ['id' => 1, 'name' => 'Tablets'],
            ['id' => 2, 'name' => 'Lotions'],
            ['id' => 3, 'name' => 'Syrups'],
            ['id' => 4, 'name' => 'Inhalers'],
            ['id' => 5, 'name' => 'Injectables'],
            ['id' => 6, 'name' => 'Ointments'],
            ['id' => 7, 'name' => 'Capsules'],
            ['id' => 8, 'name' => 'Drops'],
            ['id' => 9, 'name' => 'Suppositories'],
            ['id' => 10, 'name' => 'Creams'],
            ['id' => 11, 'name' => 'Patches'],
            ['id' => 12, 'name' => 'Vitamins'],
            ['id' => 13, 'name' => 'Herbal Remedies']
        ];

        // Pass the categories to the view
        return view('pharmacy.dashboard.add-medicine', compact('categories'));
    }

    public function storeMedicine(Request $request)
    {        
        $request->validate([
            'name' => 'required|string|max:255',
            'category_name' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'quantity' => 'required|numeric',
            'sku' => 'required|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $medicine = Medicine::create([
            'name' => $request->name,
            'category_name' => $request->category_name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'sku' => $request->sku,
            'description' => $request->description,
            'pharmacy_id' => session('LoggedAdmin'),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {

                $destination = public_path('uploads/medicine_images');
                if (!file_exists($destination)) {
                    mkdir($destination, 0777, true);
                }

                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($destination, $filename);

                MedicineImage::create([
                    'medicine_id' => $medicine->id,
                    'image_path' => 'uploads/medicine_images/' . $filename,
                ]);
            }
        }

        return redirect()->route('add.medicine')->with('success', 'Medicine added successfully!');
    }

    public function inventory()
    {
        $pharmacy_id = session('LoggedAdmin');

        $medicines = Medicine::where('pharmacy_id', $pharmacy_id)
            ->with('images')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('pharmacy.dashboard.inventory', compact('medicines'));
    }

    public function viewMedicine($id)
    {
        $medicine = Medicine::with(['images'])
            ->findOrFail($id);

        return response()->json($medicine);
    }

    public function editMedicine($id)
    {
        $medicine = Medicine::with('images')->findOrFail($id);
        $categories = [
            ['id' => 1, 'name' => 'Tablets'],
            ['id' => 2, 'name' => 'Lotions'],
            ['id' => 3, 'name' => 'Syrups'],
            ['id' => 4, 'name' => 'Inhalers'],
            ['id' => 5, 'name' => 'Injectables'],
            ['id' => 6, 'name' => 'Ointments'],
            ['id' => 7, 'name' => 'Capsules'],
            ['id' => 8, 'name' => 'Drops'],
            ['id' => 9, 'name' => 'Suppositories'],
            ['id' => 10, 'name' => 'Creams'],
            ['id' => 11, 'name' => 'Patches'],
            ['id' => 12, 'name' => 'Vitamins'],
            ['id' => 13, 'name' => 'Herbal Remedies']
        ];

        return view('pharmacy.dashboard.edit-medicine', compact('medicine', 'categories'));
    }

    public function updateMedicine(Request $request, $id)
    {
        $medicine = Medicine::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category_name' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'quantity' => 'required|numeric',
            'sku' => 'required|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $medicine->update([
            'name' => $request->name,
            'category_name' => $request->category_name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'sku' => $request->sku,
            'description' => $request->description,
            'manufacturer' => $request->manufacturer,
            'expiry_date' => $request->expiry_date,
            'dosage' => $request->dosage,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {

                $destination = public_path('uploads/medicine_images');
                if (!file_exists($destination)) {
                    mkdir($destination, 0777, true);
                }

                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($destination, $filename);

                MedicineImage::create([
                    'medicine_id' => $medicine->id,
                    'image_path' => 'uploads/medicine_images/' . $filename
                ]);
            }
        }

        return redirect()->route('pharmacy.inventory')->with('success', 'Medicine updated successfully!');
    }


}
