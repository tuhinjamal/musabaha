<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MusabahaController;
use App\Http\Controllers\Admin\LogosController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Models\User;
use App\Models\Musabaha;
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
         $data['musabahas'] = Musabaha::paginate(15);

         
        
    return view('welcome',$data);
    }

     function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('musabahas')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('para', 'like', '%'.$query.'%')
         ->orWhere('sura', 'like', '%'.$query.'%')
         ->orWhere('ayat', 'like', '%'.$query.'%')
         ->orWhere('description', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('musabahas')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->para.'</td>
         <td>'.$row->sura.'</td>
         <td>'.$row->ayat.'</td>
         <td>'.$row->description.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    
}
