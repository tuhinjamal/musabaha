<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\LogosController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LogosModel;
use Brian2694\Toastr\Facades\Toastr;
use Alert;
use Auth;

#use DB;

class LogosController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function admin(){
    return view('backend.layouts.home');
    }

    public function view(){
        $data['countLogo'] = LogosModel::count();
        $data['data'] = LogosModel::all();
        #dd($alldata->toArray());
        return view('backend.logos.viewLogo',$data);
        //dd('ok');
        

    }
    public function add(){
        return view('backend.logos.add-logo');

    }
    public function store(Request $request){
        
        $data = new LogosModel();
        $data->created_by = Auth::user()->id;
       if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/logo_images'),$filename);
    		$data['image']=$filename;
    	}
        $data->save();
        Toastr::success('A new logo has added :)','Success');
        #Alert::success('Success', 'A new user has added');
        return redirect()->route('logos.view');
        


    }

    public function edit($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = LogosModel::find($id);
        #dd($editData);
    	return view('backend.logos.edit-logo',compact('editData'));	

    }
 

    public function update(Request $request,$id){

         $data = LogosModel::find($id);
         $data->updated_by = Auth::user()->id;
       if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		@unlink(public_path('upload/logo_images'.$data->image));
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/logo_images'),$filename);
    		$data['image']=$filename;
             $data->update();
    	}
       
        Toastr::success('Logo updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('logos.view');
        

    }

    public function delete($id){
        $data = LogosModel::find($id);
        if (file_exists('public/upload/logo_images'.$data->image) AND ! empty($data->image)) {
    		unlink('public/upload/user_images'.$data->image);
    	}
        $data->delete();
        Toastr::warning('User deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('logos.view');
    }


}
