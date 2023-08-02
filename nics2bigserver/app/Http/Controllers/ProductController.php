<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


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
            'product_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'availability'=> 'required',
        ]);
    
        $id = $request->id;
        $product = Product::findOrFail($id);
    
        // Update other fields
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_description = $request->input('product_description');
        $product->capital_income = $request->input('capital_income');
        $product->availability = $request->input('availability');
    
        if ($request->hasFile('product_image')) {
            // Delete the old image if it exists
            if ($product->product_image && Storage::exists($product->product_image)) {
                Storage::delete($product->product_image);
            }
    
            // Store the new image in the 'public' disk under the 'product_images' directory
            $path = $request->file('product_image')->store('product_images', 'public');
    
            // Save the image path to the database
            $product->product_image = $path;
        }
    
        // Save the updated product
        $product->save();
    
        return redirect()->back()->with('success', 'Product Updated Successfully');
    }

}
