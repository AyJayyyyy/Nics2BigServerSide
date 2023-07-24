<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $data = Customer::all();
        
        return view('admin.customer',compact('data'));
    }
    public function addCustomer(){
        return view('admin.AddCustomer');
    }
    public function saveCustomer(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'contact_information' => 'required',
            'email' => 'required|email ',
            'password' => 'required',
        ]);

        $firstname= $request->first_name;
        $lastname= $request->last_name;
        $address= $request->address;
        $contactinformation= $request->contact_information;
        $email= $request->email;
        $password= $request->password;

        $costu = new Customer();
        $costu->first_name = $firstname;
        $costu->last_name = $lastname;
        $costu->address = $address;
        $costu->contact_information = $contactinformation;
        $costu->email = $email;
        $costu->password = $password;
        $costu->save();

        return redirect()->back()->with('success', 'Customer Added Successfully');
    }

    public function editCustomer($id) {
        $data = Customer::where('id', '=', $id)->first();
        return view('admin.EditCustomer',compact('data'));
    }
    public function updateCustomer(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'contact_information' => 'required',
            'email' => 'required|email ',
            'password' => 'required',
        ]);
        $id = $request->id;
        $firstname= $request->first_name;
        $lastname= $request->last_name;
        $address= $request->address;
        $contactinformation= $request->contact_information;
        $email= $request->email;
        $password= $request->password;

        Customer::where('id','=', $id)->update([
            'first_name' => $firstname,
            'last_name' => $lastname,
            'address' => $address,
            'contact_information' => $contactinformation,
            'email' => $email,
            'password' => $password,
        ]);
        return redirect()->back()->with('success', 'Customer Updated Successfully'); 
    }
} 
