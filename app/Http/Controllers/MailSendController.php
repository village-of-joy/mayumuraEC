<?php

namespace App\Http\Controllers;

use App\Mail\SendTestMail;
use App\Models\Goods;
use App\Models\Price;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailSendController extends Controller
{
    public function send()
    {
        
        Mail::send(new SendTestMail());
        
    }
}
