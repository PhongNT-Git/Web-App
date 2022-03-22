<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    // public function sendtoemail()
    // {
    //     $to_name = '';
    //     $to_email = '27th05@gmail.com';
    //     $data = array('name' => 'Mail từ admin', 'body' => 'liên hệ với khách hàng');
    //     Mail::send('gmail.send-to-gmail', $data, function($message) use ($to_name, $to_email) {
    //         $message->to($to_email)->subject('test gui mail gg');
    //         $message->from($to_email, $to_name);
    //     });
    //     return view('contact');
    // }
}
