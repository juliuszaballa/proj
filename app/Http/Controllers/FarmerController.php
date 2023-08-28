<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\farmers;
class FarmerController extends Controller
{
    public function index(){
        $data=farmers::get();
        return view('adminpage',compact('data'));
    }
    public function addfarmers(){
        return view('AddFarmers');
    }
    public function harvest($id){
        $data = farmers::where('id','=',$id)->first();
        return view('harvest',compact('data'));
    }
    public function SaveAccount(Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'Area'=>'required',
            'comodity'=>'required'
         ]);
         $name=$request->name;
         $address=$request->address;
         $Area=$request->Area;
         $comodity=$request->comodity;
         
         $farm=new farmers();
         $farm->name=$name;
         $farm->address=$address;
         $farm->Area=$Area;
         $farm->comodity=$comodity;
         $farm->save();
 
         return redirect()->back()->with('success','Successfully created')->with('message','error');
    }
    public function editacc($id){
        $data = farmers::where('id','=',$id)->first();
        return view('Edit',compact('data'));
}
    public function editfarmer(Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'Area'=>'required',
            'comodity'=>'required'
         ]);
         $id=$request->id;
         $name=$request->name;
         $address=$request->address;
         $Area=$request->Area;
         $comodity=$request->comodity;

        farmers::where('id','=',$id)->update([
            'name'=>$name,
            'address'=>$address,
            'Area'=>$Area,
            'comodity'=>$comodity
         ]);
         return redirect()->back()->with('success','Successfully Updated');
    }
    public function deleteAccount($id){
        farmers::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Delete Successfully');
    }

    
}
