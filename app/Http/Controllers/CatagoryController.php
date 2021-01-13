<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Catagory;
use Exception;
use Session;

class CatagoryController extends Controller
{
    public function catagoryindex(){

   	  return view('catagory.index_catagory');
    }

    public function catagorycreate(request $request){

      /*return $request;
      exit;*/
    $request->validate([
    'catagory'=>'required|unique:catagories,catagory|min:3',
    ]);
   	$catagory= new Catagory();
   	$catagory->catagory=$request->catagory;
   	$catagory->catagory_slug=$request->catagory;
   	$catagory->save();
    //Brand::create($request->all());
   	Session::flash('success', 'Catagory has added successfully');
   	return back();
   }
     
    /*public function catagorycreate(request $request){

      //return $request;
      //exit;
      $request->validate([
        'catagory'=>'required|unique:catagories,catagory|min:4',
      ]);


     $Catagory=null;
      try{

        $catagory=$request->catagory;

        //return $catagory;
        //exit;
         $slug=$request->catagory;

        $catagory=Catagory::create([
          'catagory' => $catagory,
          'catagory_slug' => $slug
          
        ]);
        $Catagory=true;
      }
      catch(Exception $exception){

        $Catagory=false;
      }
      Session::flash('success', 'Catagory has added successfully');
      return back();


    }*/



     public function catagoryshow(){

      $catagory=Catagory::orderBy('id','desc')->get();

      //return $data;
   	  return view('catagory.manage_catagory',compact('catagory'));
    }

      public function catagoryinactive($id){
      $catagory=catagory::find($id);
      $catagory->status=0;
      $catagory->save();
      Session::flash('success', 'catagory has inactive successfully');
      return back();
    }

     public function catagoryactive($id){

      $catagory=catagory::find($id);
      $catagory->status=1;
      $catagory->save();
      Session::flash('success', 'catagory has active successfully');
      return back();
  }

   public function catagoryedit($id){

     $catagory=Catagory::find($id);
     return view('catagory.edit_catagory',compact('catagory'));
    }




        public function catagoryupdate(request $request,$id){

      //return $request;
        $request->validate([

          'catagory'=>'required|unique:catagories,catagory|min:3',
        ]);
        $update=new catagory();
        $update=catagory::find($id);
       //return $up;
        $update->catagory=$request->catagory;
        $update->save();
        Session::flash('success', 'catagory has update successfully');
        return redirect()->route('manage-catagory');
   }

    public function catagorydelete($id){

      $delete=catagory::find($id);
      $delete->delete();
      Session::flash('success', 'catagory has delete successfully');
      return back();
  }



}
