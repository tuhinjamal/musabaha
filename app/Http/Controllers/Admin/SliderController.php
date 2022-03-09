<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Alert;
use Auth;

class SliderController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }

  

    public function view(){
        $data['countslider'] = Slider::count();
        $data['data'] = Slider::all();
        #dd($alldata->toArray());
        return view('backend.slider.view-slider',$data);
        //dd('ok');
        

    }
    public function add(){
        return view('backend.slider.add-slider');

    }
    public function store(Request $request){
        
        $data = new Slider();
        $data->created_by = Auth::user()->id;
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
       if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/slider_images'),$filename);
    		$data['image']=$filename;
    	}
        $data->save();
        Toastr::success('A new slider has added :)','Success');
        #Alert::success('Success', 'A new user has added');
        return redirect()->route('slider.view');
        


    }

    public function edit($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = Slider::find($id);
        #dd($editData);
    	return view('backend.slider.edit-slider',compact('editData'));	

    }
 

    public function update(Request $request,$id){

         $data = Slider::find($id);
         $data->created_by = Auth::user()->id;
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
       if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/slider_images'),$filename);
    		$data['image']=$filename;
    	}
        $data->update();
       
        Toastr::success('slider updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('slider.view');
        

    }

    public function delete($id){
        $data = Slider::find($id);
        if (file_exists('public/upload/slider_images'.$data->image) AND ! empty($data->image)) {
    		unlink('public/upload/user_images'.$data->image);
    	}
        $data->delete();
        Toastr::warning('User deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('slider.view');
    }
}
