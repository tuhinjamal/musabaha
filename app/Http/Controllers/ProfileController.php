<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Alert;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
   public function view()
    {
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	//dd($user);
    	return view('backend.user.view-profile',compact('user'));
    }

    public function edit()
    {
    	$id = Auth::user()->id;
    	$editData = User::find($id);
    	return view('backend.user.edit-userprofile',compact('editData'));	

    }

    public function update(Request $request)
    {
    	$data = User::find(Auth::user()->id);
    	
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->phone = $request->phone;
    	$data->address = $request->address;
    	$data->gender = $request->gender;
    	if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		@unlink(public_path('upload/user_images'.$data->image))	;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/user_images'),$filename);
    		$data['image']=$filename;
    	}
    	$data->save();
		Toastr::success('Profile Updated  sucessfully :)','Success');
    	return redirect()->route('profile.view');
    }

    public function passwordview()
    {
    	return view('backend.user.edit-password');	
    }
    public function passwordupdate(Request $request)
    {
    	if (Auth::attempt(['id'=>Auth::user()->id ,'password'=>$request->current_password])) {
    		$user = User::find(Auth::user()->id);
    		$user->password = bcrypt($request->new_password);
    		$user->save();
			Toastr::success('Password has changed sucessfully :)','Success');
    		return redirect()->route('profile.view');
    	}else{
			Toastr::warning('Password did matched :)','Warning');
    		return redirect()->back();
    	}
    }
}
