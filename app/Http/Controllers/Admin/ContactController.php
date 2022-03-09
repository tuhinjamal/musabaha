<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Alert;
use Auth;

class ContactController extends Controller
{
     public function __construct()
   {
       $this->middleware('auth');
   }

    public function view(){
        $data['countcontact'] = Contact::count();
        $data['data'] = Contact::all();
        #dd($alldata->toArray());
        return view('backend.contact.view-contact',$data);
        //dd('ok');
        

    }
    public function add(){
        return view('backend.contact.add-contact');

    }
    public function store(Request $request){
        
        $data = new Contact();
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->website = $request->website;
        $data->address = $request->address;
        $data->save();
        Toastr::success('A new Contact has added :)','Success');
        #Alert::success('Success', 'A new user has added');
        return redirect()->route('contact.view');
        


    }

    public function edit($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = Contact::find($id);
        #dd($editData);
    	return view('backend.contact.edit-contact',compact('editData'));	

    }
 

    public function update(Request $request,$id){

         $data = Contact::find($id);
        
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->website = $request->website;
        $data->address = $request->address;
        $data->update();
       
        Toastr::success('contact updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('contact.view');
        

    }

    public function delete($id){
        $data = Contact::find($id);
       
        $data->delete();
        Toastr::warning('Contact deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('Contact.view');
    }
}
