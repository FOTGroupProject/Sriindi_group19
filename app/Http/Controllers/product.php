<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blacklist;
class product extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|string|max:255',
           
        ]);

        // Use the create method to store the validated data
        blacklist::create($validatedData);

        return redirect()->back()->with('success', 'Product created successfully');
    }
}
