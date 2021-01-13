<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Session;

class BrandController extends Controller
{
   public function index(){

   	  return view('Admin.add-brand');
   }

   public function create(request $request){
    $request->validate([
    'brand_name'=>'required|unique:brands,brand_name|min:3',
    ]);
   	$brand= new Brand();
   	$brand->brand_name=$request->brand_name;
   	$brand->brand_slug=$request->brand_name;
   	$brand->save();
   /*	Brand::create($request->all());*/
   	Session::flash('success', 'Brand has added successfully');
   	return back();
    //return redirect()->back()->with('success', 'Brand has added successfully');
    	
   	  //return $request;

   }


   public function show(){


      $data=Brand::orderBy('id','desc')->get();

      //return $data;
   	  return view('Admin.manage-brand',compact('data'));
   } 

 
   public function inactive($id){

      $id=brand::find($id);
      $id->status=0;
      $id->save();
      Session::flash('success', 'Brand has inactive successfully');
      return back();
    }

     public function active($id){

      $id=brand::find($id);
      $id->status=1;
      $id->save();
      Session::flash('success', 'Brand has active successfully');
      return back();
  }

  public function delete($id){

      $delete=brand::find($id);
      $delete->delete();
      Session::flash('success', 'Brand has delete successfully');
      return back();
  }


    public function edit($id){

      $edit=brand::find($id);
      //return $edit;
      return view('Admin.edit',compact('edit'));
  }


       public function update(request $request){

      //return $request;
        $request->validate([

          'brand_name'=>'required|unique:brands,brand_name|min:3',
        ]);
        $up=new Brand();

        $up=brand::find($request->id);
       //return $up;
        $up->brand_name=$request->brand_name;
        $up->save();
        Session::flash('success', 'Brand has update successfully');
        return redirect()->route('manage-brand');

  }
}
