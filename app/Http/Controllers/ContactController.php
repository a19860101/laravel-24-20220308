<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //
    function index(){
        return view('contact.index');
    }
    function result(Request $request){
        $mail = $request->mail;
        Mail::raw('hello mail123',function($message){
            $message->from('asdf@gmail.com');
            $message->to('a19860101@gmail.com');
            $message->subject('hello subject');
        });
    }
}
