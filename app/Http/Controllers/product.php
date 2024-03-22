<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\blacklist;
use App\Models\category;
use App\Models\products;

use App\Models\User;
use App\Models\payment; 
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

        return view('/admin/product', ['categories' => $categories]);
    }

    public function delcat($id)
    {
        $cat = category::findOrFail($id);
        $cat->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');
    }
    public function procount()
    {
        $productcount = products::count(); // Fetch the row count from the products table
        return view('/admin/index', ['productcount' => $productcount]);
    public function viewdashboard()
    {
        $productcount = products::count(); // Fetch the row count from the products table
        $users = User::count(); 
        $payment = payment::count();
        $currentDate = Carbon::now()->toDateString();
        $todayearning = payment::where('created_at', $currentDate)->get();
        $monthlyearning = payment::whereMonth('created_at', date('m'))->get();
        $totalusers=User::count();
        return view('/admin/index',compact('productcount','users','payment','todayearning','monthlyearning','totalusers'));
    }

    public function viewproduct(){
        $products = products::all(); // Fetch all products from the database
        $categories = category::all();
        return view('/admin/product', compact('products', 'categories'));
    }
    public function productstore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'sdescription' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'regularprice' => 'required|string|max:255',
            'salesprice'=> 'required|string|max:255',
        ]);
        // Use the create method to store the validated data
        products::create($validatedData);

        return redirect()->back()->with('success', 'blacklist added successfully');
    }

    public function delcate($id)
    {
        $cat = category::findOrFail($id);
        $cat->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');
    }

}





