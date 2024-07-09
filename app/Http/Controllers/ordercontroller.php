<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders; // Assuming your Order model is named Order
use App\Models\order_details; // Assuming your OrderDetail model is named OrderDetail
use App\Models\User; // Assuming your User model is named User
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function orderdetailsview(string $id){
        // Fetch order details based on order_id
        $order_details = order_details::where('order_id', $id)->get();

        // Fetch a single order based on its ID
        $order = orders::find($id);

        // Fetch customers associated with the orders
        $customers = DB::table('orders')
            ->leftJoin('users', 'orders.user_id', '=', 'users.id')
            ->where('orders.id', $id) // Assuming you want customers related to this specific order
            ->select('users.*')
            ->get();

        return view('admin/orderview', compact('order', 'order_details', 'customers'));
    }
}
