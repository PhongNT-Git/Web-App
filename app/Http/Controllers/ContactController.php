<?php

namespace App\Http\Controllers;


use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Validator;

class ContactController extends Controller
{
    // function index(){
    //     return view('contact/contactForm');
    // }
    
    public function showContactForm(){
        return view('contactForm');
    }
    
    function send(Request $request){
        $this->validate($request, [
            'subject' => 'required',
            'tomail' => 'required |email',
            'message' => 'required',
        ]);
        if($this->isOnline()){
            $data = [
                'tomail' => $request->tomail,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
            
            Mail::to($data['tomail'])->send(new Contact($data));
            // return redirect()->back()-with('success', 'email sent');
            Session::flash('success', 'thank u for your email');
            return redirect()->route('contactForm');
        }
        else{
            return redirect()->back()->withInput()->with('error', 'check your internet connection');
        }
        
        return redirect()->route('contactForm');
    }

    function isOnline($site = "https://www.youtube.com/watch?v=CYzqw3gHhJ0&list=PLKKL7Oul9VNczFCtOBSag3rqUvpRiKYYb&index=5&t=26s"){
        if(@fopen($site, 'r')){
            return true;
        }
        else{
            return false;
        }
    }

    // public function saveEmail(Request $request){
    //     $email = $request->input('email');
    //     $subject = $request->input('subject');
    //     $message = $request->input('message');
    //     DB::insert("insert into contact (email, subject, message) values ('$email', '$subject', '$message', CURRENT_TIMESTAMP)");
    // }  
}
