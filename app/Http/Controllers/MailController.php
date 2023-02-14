<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MyDemoMail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'url' => 'https://www.itsolutionstuff.com'
        ];
        
        Mail::to('toshipapa0915.akimama1007@gmail.com')->send(new MyDemoMail($mailData));
        
        dd("Email is sent successfully.");
        
    }
}
