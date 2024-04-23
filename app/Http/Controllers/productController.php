<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\blacklist;
use App\Models\category;
use App\Models\products;
use App\Models\User;
use App\Models\payment;
use App\Models\orders;
class productController extends Controller
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

    public function updatecategory(Request $request, $category_id)
    {
        $category=category::find($category_id);
        $category->category=$request->category;
        $category->save();
        return redirect()->back()->with('success', 'category updated successfully');
    }
    
    public function vieworders()
    {
        $orders = orders::all(); // Fetch the row count from the products table
     
        return view('/admin/orders',compact('orders'));
    }
    public function catstore(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:255|unique:categories,category',
        ]);
        category::create($validatedData);
        return redirect()->back()->with('success2', 'category added successfully');
    }
    public function deletecategory($category_id)
    {
      //  $cat = category::findOrFail($category_id);
      //  $cat->delete();
            category::destroy($category_id);
        return redirect()->back()->with('success', 'Category deleted successfully');
    }
    public function ratingpageview()
    {
        return view('/admin/ratings');
    }
    public function blacklist()
    {
        return view('/admin/blacklist');
    }
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
        return view('/admin/products', compact('products', 'categories'));
    }
    public function categorysendtoproductpage(){
        $categories = category::all();
        return view('/admin/addproduct', compact( 'categories'));
    }
    public function categorysendtocategorypage(){
        $categories = category::all();
        return view('/admin/category', compact( 'categories'));
    }
    public function productstore(Request $request)
    {
        $regularPrice = $request->input('regularprice');
        $salesPrice = $request->input('salesprice');


        if ($regularPrice < $salesPrice) {
            return back()->withErrors(['regularprice' => 'Regular price must be greater than sales price.'])->withInput();
        } else {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|unique:products,name',
                'sdescription' => 'required|string|max:255',
                'sku' => 'required|string|max:255|unique:products,sku',
                'category' => 'required|string|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
                'quantity' => 'required|string|max:255',
                'regularprice' => 'required|string|max:255',
                'salesprice' => 'required|string|max:255',
            ]);
             $imagePath = $request->file('image')->store('images');
            return $imagePath;

            //$validatedData['image'] = $imagePath;
            // Use the create method to store the validated data


              //  products::create($validatedData);

           //     return redirect()->back()->with('success', 'blacklist added successfully');


        }


    }


}





