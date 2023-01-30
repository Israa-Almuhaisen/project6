<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;


class ContactUsFormController extends Controller
{



  
    // This func will show contact page
    public function createForm() {

      $data=contact::all();


      return view('admin.contact.showw',['data'=>$data]);

  }

     


      // Store Contact Form data
      public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());


        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
  
}

public function destroy($id)
{
  contact::findOrfail($id)->delete();
    return redirect()->route('contact.createForm');
}
}


