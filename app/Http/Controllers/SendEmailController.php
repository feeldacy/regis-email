<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index(){

        return view('auth.register');
    }

    public function store(Request $request){
        $data = $request->only(['name', 'nim', 'password']);

        dispatch(new SendMailJob($data));
        
        return redirect()->route('send-email')->with('success', 'Email berhasil di kirim');
    }
}
