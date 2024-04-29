<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;
class suppliercontroller extends Controller
{
    
    public function viewsupplier()
    {
        $supplier = supplier::all();
        return view('admin.suplier', compact('supplier'));
    }

    public function deletesupplier($id)
    {
        $item = supplier::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('success', 'supplier deleted successfully');
    }
    public function addsupplier(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'tax_id' => 'required|string|max:255',
            'active' => 'required|string|max:255',
        ]);
   
         supplier::create($validatedData);
         return redirect()->back()->with('success', 'blacklist added successfully');
    }
}
