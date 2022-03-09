<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\LogosController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Models\User;
use App\Models\Portfolio;
use App\Models\LogosModel;
use App\Models\Slider;
use App\Models\About;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Alert;
//use Auth;
use DB;

#use DB;

class FrontendController extends Controller
{
   // public function __construct()
   //{
   //    $this->middleware('auth');
  // }
    public function view(){
         $data['logo'] = LogosModel::first();
         $data['sliders'] = Slider::all(); 
         $data['portfolio'] = Portfolio::all();
         $data['about'] = About::all();
         $data['contact'] = Contact::all();
         
        
    return view('welcome',$data);
    }

    
}
