<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\LogosController;
use App\Models\User;
use App\Models\Portfolio;
use App\Models\Portfolio_b;
use App\Models\Portfolio_c;
use App\Models\Portfolio_d;
use App\Models\Portfolio_e;
use App\Models\Portfolio_f;
use Brian2694\Toastr\Facades\Toastr;
use Alert;
use Auth;

#use DB;

class PortfolioController extends Controller
{
     public function __construct()
   {
       $this->middleware('auth');
   }



   public function view_a(){
       $data['countPortfolio'] = Portfolio::count();
        $data['data'] = Portfolio::all();
        #dd($alldata->toArray());
        return view('backend.portfolio.view-portfolio',$data);
       // dd('ok');
        

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
        return redirect()->route('portfolio_a.view');
        


    }

    public function edit_a($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = Portfolio::find($id);
        #dd($editData);
    	return view('backend.portfolio.edit-portfolio',compact('editData'));	

    }
 

    public function update_a(Request $request,$id){

         $data = Portfolio::find($id);
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
             $data->update();
    	}
       
        Toastr::success('portfolio updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('portfolio_a.view');
        

    }

    public function delete_a($id){
        $data = Portfolio::find($id);
        if (file_exists('public/upload/portfolio_b_images'.$data->image) AND ! empty($data->image)) {
    		unlink('public/upload/portfolio_a_images'.$data->image);
    	}
        $data->delete();
        Toastr::warning('portfolio deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('portfolio_a.view');
    }


    
}
