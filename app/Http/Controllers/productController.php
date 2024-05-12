<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\blacklist;
use App\Models\category;
use App\Models\products;
use App\Models\User;
use App\Models\payment;
use App\Models\orders;
use App\Models\supplier;
use App\Models\attributes;
class productController extends Controller
{
    public function addproduct(Request $request)
    {
     
        $regularPrice = $request->input('regularprice');
        $salesPrice = $request->input('salesprice');
        if ($regularPrice < $salesPrice) {
            return back()->withErrors(['regularprice' => 'Regular price must be greater than sales price.'])->withInput();
        } else{
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name',
            'sdescription' => 'required|string|max:255',
            'sku' => 'required|string|max:255|unique:products,sku',
            'category' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'regularprice' => 'required|string|max:255',
            'salesprice' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'supplier' => 'required|string|max:255'
        ]);
        $imageName = $request->sku. time().'.'.$request->image->extension(); 
        $request->image->move(public_path('/products'), $imageName);
        $products = new Products([
            'name' => $request->input('name'),
            'sdescription' => $request->input('sdescription'),
            'sku' => $request->input('sku'),
            'category' => $request->input('category'),
            'quantity' => $request->input('quantity'),
            'regularprice' => $request->input('regularprice'),
            'salesprice' => $request->input('salesprice'),
            'image' => $imageName,
            'supplier_id' => $request->input('supplier'),
        ]);
        $products->save();
        return redirect()->back()->with('success', 'blacklist added successfully');
        }
    }
    
    public function updateproduct(string $id, Request $request)
{
    // Validate the incoming request data
    $validator = Validator::make($request->all(), [
        'name' => [
            'required',
            'string',
            'max:255',
            Rule::unique('products')->ignore($id),
        ],
        'sdescription' => 'required|string|max:255',
        'sku' => [
            'required',
            'string',
            'max:255',
            Rule::unique('products')->ignore($id),
        ],
        'category' => 'required|string|max:255',
        'quantity' => 'required|string|max:255',
        'regularprice' => 'required|string|max:255',
        'salesprice' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'supplier' => 'required|string|max:255'
    ]);

    // If validation fails, redirect back with error messages
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Proceed with updating the product if validation passes
    $product = Products::find($id);
    if (!$product) {
        return redirect()->back()->with('error', 'Product not found');
    }

    $product->name = $request->input('name');
    $product->sdescription = $request->input('sdescription');
    $product->sku = $request->input('sku');
    $product->category = $request->input('category');
    $product->quantity = $request->input('quantity');
    $product->regularprice = $request->input('regularprice');
    $product->salesprice = $request->input('salesprice');
    $product->supplier_id = $request->input('supplier');

    // Handle image upload if a new image is provided
    if ($request->hasFile('image')) {
        $imageName = $request->sku . '_' . time() . '.' . $request->image->extension(); 
        $request->image->move(public_path('/products'), $imageName);
        $product->image = $imageName;
    }

    $product->save();

    return redirect()->back()->with('success', 'Product updated successfully');
}
    public function addattributes(Request $request)
    {
        $validdata=$request->validate([
            'name' => 'required|string|max:35',  
        ]);
        attributes::create($validdata);
        return redirect()->back()->with('attributes', 'attribute added successfully');
    }
    public function deleteproduct(string $product_id)
    {
        $deleteproduct = products::find($product_id);
        $deleteproduct->delete();
        return redirect()->back()->with('deleteproduct', 'product deleted successfully');
    }
    public function addquantity(Request $request)
    {
        $supplierId = $request->input('supplier_id');
        $products = supplier_product::where('supplier_id', $supplierId)->get();
        $suppliers = Supplier::all(); // You can pass this to the view for the select dropdown
        return view('admin.sandp',compact('products', 'suppliers'));
    }
  
   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|string|max:255',

        ]);

        // Use the create method to store the validated data
        blacklist::create($validatedData);

        return redirect()->back()->with('success', 'blacklist added successfully');
    }

    public function updatecategory(string $id, Request $request)
    {
        $category=category::find($id);
        $category->category=$request->category;
        $category->save();
        return redirect()->back()->with('success3', 'category updated successfully');
       
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
        return redirect()->back()->with('deletecat', 'Category deleted successfully');
    }
    public function delattributes($attributes)
    {
      //  $cat = category::findOrFail($category_id);
      //  $cat->delete();
      attributes::destroy($attributes);
        return redirect()->back()->with('delattributes', 'attributes deleted successfully');
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
        $products = products::select(
            'products.id',
            'products.name',
            'products.sdescription',
            'products.image',
            'products.sku',
            'products.category',
            'products.supplier_id',
            'products.quantity',
            'products.regularprice',
            'products.salesprice',
            'products.created_at',
            'products.updated_at',
            'blacklist.blacklist_id', // Include the non-aggregated column
            DB::raw("CASE WHEN blacklist.blacklist_id IS NOT NULL THEN 'Yes' ELSE 'No' END AS blacklist_status"),
            DB::raw("COALESCE(SUM(order_details.quantity), 0) AS total_quantity_ordered")
        )
        ->leftJoin('blacklist', 'products.id', '=', 'blacklist.product_id')
        ->leftJoin('order_details', 'products.id', '=', 'order_details.product_id')
        ->groupBy(
            'products.id',
            'products.name',
            'products.sdescription',
            'products.image',
            'products.sku',
            'products.category',
            'products.supplier_id',
            'products.quantity',
            'products.regularprice',
            'products.salesprice',
            'products.created_at',
            'products.updated_at',
            'blacklist.blacklist_id' // Include the non-aggregated column in GROUP BY
        )
        ->get();
            $suppliers = supplier::all();
        $categories = category::all();
        return view('/admin/products', compact('products', 'categories', 'suppliers'));
    }
    public function categorysendtoproductpage(){
        $categories = category::all();
        $suppliers = supplier::all();
        return view('/admin/addproduct', compact( 'categories', 'suppliers'));
    }
    public function categorysendtocategorypage(){
        $categories = category::all();
        $attributes = attributes::all();
        return view('/admin/category', compact( 'categories', 'attributes'));
    }
    


}





