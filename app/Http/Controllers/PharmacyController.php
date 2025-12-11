<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
