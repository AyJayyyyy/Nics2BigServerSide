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
    public function saveProduct(Request $request) {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'capital_income' => 'required', 
            'product_image' => 'required',

        ]);
        
        $productname= $request->product_name;
        $productprice= $request->product_price;
        $productdescription= $request->product_description;
        $capitalincome= $request->capital_income;
        $productimage= $request->product_image;

        $prod = new Product();
        $prod->product_name = $productname;
        $prod->product_price = $productprice;
        $prod->product_description = $productdescription;
        $prod->capital_income = $capitalincome;
        if ($request->hasFile('product_image')) {
            $productimage = $request->file('product_image')->store('storage', 'public');
            $prod->product_image = $productimage;
        }
        $prod->save();

        return redirect()->back()->with('success', 'Product Added Successfully');

    }
    public function editProduct($id) {
        $data = Product::where('id', '=', $id)->first();
        return view('admin.EditProduct', compact('data'));
    }
    public function updateProduct(Request $request) {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'capital_income' => 'required', 
            'product_image' => 'required',
            'availability'=> 'required',

        ]);
        $id= $request->id;
        $productname= $request->product_name;
        $productprice= $request->product_price;
        $productdescription= $request->product_description;
        $capitalincome= $request->capital_income;
        $productimage= $request->product_image;
        $availability = $request->input('availability');

        Product::where('id', '=', $id)->update([
            'product_name' => $productname,
            'product_price'=> $productprice,
            'product_description' => $productdescription,
            'capital_income' => $capitalincome,
            'product_image' => $productimage,
            'availability' => $availability,
        ]);
        return redirect()->back()->with('success', 'Product Updated Successfully');
    }
    public function showProduct() {
        $data = Product::get();
        return view('admin.ShowProduct', compact('data'));
    }
}
