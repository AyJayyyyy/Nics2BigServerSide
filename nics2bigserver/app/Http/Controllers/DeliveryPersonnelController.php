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
    
  
    public function editCourierpersonnel($id){
        $data = DeliveryPersonnel::where('id','=',$id)->first();
        return view('admin.EditCourier',compact('data'));
    }
}
