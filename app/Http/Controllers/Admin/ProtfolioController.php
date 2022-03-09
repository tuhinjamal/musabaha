<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\LogosController;
use App\Models\User;
use App\Models\portfolio;
use Brian2694\Toastr\Facades\Toastr;
use Alert;
use Auth;

class ProtfolioController extends Controller
{
   

   public function admin(){
    return view('backend.layouts.home');
    }

    public function view_a(){
        $data['countPortfolio'] = protfolio::count();
        $data['data'] = portfolio::all();
        #dd($alldata->toArray());
        return view('backend.portfolio.view-portfolio',$data);
        //dd('ok');
        

    }
    public function add_a(){
        return view('backend.portfolio.add-portfolio');

    }
    public function store_a(Request $request){
        
        $data = new Portfolio();
        $data->created_by = Auth::user()->id;
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
       if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/portfolio_images'),$filename);
    		$data['image']=$filename;
    	}
        $data->save();
        Toastr::success('A new portfolio has added :)','Success');
        #Alert::success('Success', 'A new user has added');
        return redirect()->route('portfolio.view');
        


    }

    public function edit_a($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = portfolio::find($id);
        #dd($editData);
    	return view('backend.portfolio.edit-portfolio',compact('editData'));	

    }
 

    public function update_a(Request $request,$id){

         $data = portfolio::find($id);
         $data->updated_by = Auth::user()->id;
         $data->short_title = $request->short_title;
         $data->long_title = $request->long_title;
       if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		@unlink(public_path('upload/portfolio_images'.$data->image));
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/portfolio_images'),$filename);
    		$data['image']=$filename;
             
    	}
        $data->update();
       
        Toastr::success('portfolio updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('portfolio.view');
        

    }

    public function delete_a($id){
        $data = portfolio::find($id);
        if (file_exists('public/upload/logo_images'.$data->image) AND ! empty($data->image)) {
    		unlink('public/upload/user_images'.$data->image);
    	}
        $data->delete();
        Toastr::warning('portfolio deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('portfolio.view');
    }



    

}
