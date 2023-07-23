<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $data = Product::get();
        return view('admin.product', compact('data'));
    }
    public function addProduct() {
        return view('admin.AddProduct');
    }
}
