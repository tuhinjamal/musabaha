<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\LogosController;
use App\Http\Controllers\Admin\MusabahaController;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Alert;
use Auth;

#use DB;

class AdminController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function admin(){
    return view('backend.layouts.home');
    }

    public function view(){

        $data['data'] = User::all();
        #dd($alldata->toArray());
        return view('backend.user.viewUser',$data);
        

    }
    public function add(){
        return view('backend.user.add-user');

    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:users,email',

        ]);
        $data = new User();
        $data->is_admin = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        Toastr::success('A new user has added :)','Success');
        #Alert::success('Success', 'A new user has added');
        return redirect()->route('users.view');
        


    }

    public function edit($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = User::find($id);
        #dd($editData);
    	return view('backend.user.edit-profile',compact('editData'));	

    }
 

    public function update(Request $request,$id){

        $data = User::find($id);
        $data->is_admin = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        Toastr::success('User information updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('users.view');

    }

    public function delete($id){
        $data = User::find($id);
        if (file_exists('public/upload/user_images'.$data->image) AND ! empty($data->image)) {
    		unlink('public/upload/user_images'.$data->image);
    	}
        $data->delete();
        Toastr::warning('User deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('users.view');
    }


}
