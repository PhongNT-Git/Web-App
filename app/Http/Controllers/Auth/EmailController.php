<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class EmailController extends Controller
{
    function index(){
        return view('welcome');
    }
    function store(Request $request){
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        dd($email, $subject, $message);
        
    }
}
