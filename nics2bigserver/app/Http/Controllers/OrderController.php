<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index(){
        $orders = Order::with('customer')->get();

        return view('admin.order', compact('orders'));
    }
}
