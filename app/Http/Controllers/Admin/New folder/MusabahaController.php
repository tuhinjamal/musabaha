<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Musabaha;
use Brian2694\Toastr\Facades\Toastr;
use Alert;
use Auth;

#use DB;

class MusabahaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
 
 
     public function view(){
         $data['countmusabaha'] = Musabaha::count();
         $data['data'] = Musabaha::all();
         #dd($alldata->toArray());
         return view('backend.musabaha.view-musabaha',$data);
         //dd('ok');
         
 
     }
     public function add(){
         return view('backend.musabaha.add-musabaha');
 
     }
     public function store(Request $request){
         
         $data = new Musabaha();
         $data->name = $request->name;
         $data->para = $request->para;
         $data->sura = $request->sura;
         $data->ayat = $request->ayat;
         $data->description = $request->description;
         $data->save();
         Toastr::success('A new musabaha has added :)','Success');
         #Alert::success('Success', 'A new user has added');
         return redirect()->route('musabaha.view');
         
 
 
     }
 
     public function edit($id)
     {   
         
         #$id = Auth::user()->id;
         $editData = Musabaha::find($id);
         #dd($editData);
         return view('backend.musabaha.edit-musabaha',compact('editData'));	
 
     }
  
 
     public function update(Request $request,$id){
 
          $data = Musabaha::find($id);
         
          $data->name = $request->name;
          $data->para = $request->para;
          $data->sura = $request->sura;
          $data->ayat = $request->ayat;
          $data->description = $request->description;
         $data->update();
        
         Toastr::success('musabaha updated successfully :)','Success');
         #Alert::success('Success', 'User data has been updated');
         return redirect()->route('musabaha.view');
         
 
     }
 
     public function delete($id){
         $data = Musabaha::find($id);
        
         $data->delete();
         Toastr::warning('musabaha deleted successfully :)','Success');
         #Alert::success('Deleted', 'User has been deleted');
         
         return redirect()->route('musabaha.view');
     }
}
