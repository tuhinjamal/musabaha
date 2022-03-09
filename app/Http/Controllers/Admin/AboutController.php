<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\About;
use Brian2694\Toastr\Facades\Toastr;
use Alert;
use Auth;

class AboutController extends Controller
{
     public function __construct()
   {
       $this->middleware('auth');
   }


    public function view(){
        $data['countabout'] = About::count();
        $data['data'] = About::all();
        #dd($alldata->toArray());
        return view('backend.about.view-about',$data);
        //dd('ok');
        

    }
    public function add(){
        return view('backend.about.add-about');

    }
    public function store(Request $request){
        
        $data = new About();
        $data->title = $request->title;
        $data->about = $request->about;
        $data->save();
        Toastr::success('A new About has added :)','Success');
        #Alert::success('Success', 'A new user has added');
        return redirect()->route('about.view');
        


    }

    public function edit($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = About::find($id);
        #dd($editData);
    	return view('backend.about.edit-about',compact('editData'));	

    }
 

    public function update(Request $request,$id){

         $data = About::find($id);
        
        $data->title = $request->title;
        $data->about = $request->about;
        $data->update();
       
        Toastr::success('about updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('about.view');
        

    }

    public function delete($id){
        $data = About::find($id);
       
        $data->delete();
        Toastr::warning('about deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('about.view');
    }
    
}
