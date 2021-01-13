<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcatagory;
use App\Catagory;
use Session;

class SubcatagoryController extends Controller
{
     public function subcatagoryindex(){
     $cat=Catagory::orderBy('id','desc')->get();	
     //return $cat;

   	  return view('subcatagory.subcatagory_index',compact('cat'));
    }



    public function subcatagorycreate(request $request){

    //return $request;
    $request->validate([
    'sub_catagory'=>'required|unique:catagories,catagory|min:3',
    ]);
    $subcat= new Subcatagory();
    $subcat->catagory_id=$request->catagory_id;
    $subcat->sub_catagory=$request->sub_catagory;

    $subcat->save();
   
   /* Brand::create($request->all());*/
    Session::flash('success', 'Catagory has added successfully');
    return redirect()->route('manage-subcatagory');
     
    }



    public function subcatagoryshow(){
    $subcat=Subcatagory::with('cat')->get();
    //return $subcat;
    return view('subcatagory.subcatagory_manage',compact('subcat'));
    }


     public function subcatagoryinactive($id){

      $subcat=Subcatagory::find($id);
      $subcat->status=0;
      $subcat->save();
      Session::flash('success', 'catagory has inactive successfully');
      return back();
    }

     public function subcatagoryactive($id){

      $subcatagory=Subcatagory::find($id);
      $subcatagory->status=1;
      $subcatagory->save();
      Session::flash('success', 'catagory has active successfully');
      return back();
  }

    public function subcatagoryedit($id){


    $subcat=Subcatagory::find($id);
    $cat=Catagory::orderBy('id','desc')->get();
    //return $subcat;
    return view('subcatagory.subcatagory_edit',compact('subcat','cat'));
    }




     public function subcatagoryupdate(request $request,$id){

     /* return $request;
      exit;*/
       
        $update=new Subcatagory();
        $update=Subcatagory::find($id);
       //return $up;
        
      $update->catagory_id=$request->catagory_id;
      $update->sub_catagory=$request->sub_catagory;

      $update->save();
        Session::flash('success', 'catagory has update successfully');
        return redirect()->route('manage-subcatagory');
   }

    public function subcatagorydelete($id){

      $delete=Subcatagory::find($id);
      $delete->delete();
      Session::flash('success', 'catagory has delete successfully');
      return back();
  }


}
