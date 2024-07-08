<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\supplier;
use App\Models\supplier_blacklist;
class suppliercontroller extends Controller
{
    
    public function viewsupplier()
    {
        $supplier = Supplier::leftJoin('supplier_blacklist as b', 'suppliers.id', '=', 'b.supplier_id')
        ->select(
            'suppliers.id',
            'suppliers.name',
            'suppliers.email',
            'suppliers.phone',
            'suppliers.address',
            'suppliers.tax_id',
            'suppliers.active',
            'suppliers.created_at',
            'suppliers.updated_at',
            DB::raw('CASE WHEN b.supplier_id IS NOT NULL THEN "yes" ELSE "no" END AS blacklisted')
        )
        ->get();
    
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
        if ($request->hasFile('image')) {
            $imageName = $request->sku . '_' . time() . '.' . $request->image->extension(); 
            $request->image->move(public_path('/products'), $imageName);
            $product->image = $imageName;
        }
         supplier::create($validatedData);
         return redirect()->back()->with('success2', 'supplier added successfully');
    }
    
    public function addtoblacklist($id)
    {
       supplier_blacklist::create([
            'supplier_id' => $id,
        ]);
        return redirect()->back()->with('success', 'product added to blacklist successfully');

    }
    public function updatesupplier(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'tax_id' => 'required|string|max:255',
            'active' => 'required|string|max:255',
        ]);
        supplier::whereId($id)->update($validatedData);
        return redirect()->back()->with('successupdate', 'supplier updated successfully');
}
}
