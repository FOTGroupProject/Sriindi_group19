<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blacklist;
use App\Models\category;
class product extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|string|max:255',

        ]);

        // Use the create method to store the validated data
        blacklist::create($validatedData);

        return redirect()->back()->with('success', 'blacklist added successfully');
    }
    public function catstore(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',

        ]);

        // Use the create method to store the validated data
        category::create($validatedData);

        return redirect()->back()->with('success', 'category added successfully');
    }
    public function viewcat()
    {
        $categories = category::all(); // Fetch all products from the database

        return view('/product', ['categories' => $categories]);
    }
    public function delcat($id)
    {
        $cat = category::findOrFail($id);
        $cat->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');
    }

}
