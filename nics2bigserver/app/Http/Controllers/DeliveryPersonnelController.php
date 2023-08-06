<?php

namespace App\Http\Controllers;

use App\Models\DeliveryPersonnel;
use Illuminate\Http\Request;


class DeliveryPersonnelController extends Controller
{
    public function index(){
        $data = DeliveryPersonnel::all();
        
        return view('admin.courier',compact('data'));
    }
    public function editDeliverypersonnel($id){
        $data = DeliveryPersonnel::where('id', '=', $id)->first();
        return $data;
    }
}
