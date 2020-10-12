<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AccountCreation;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::to("hanna.achab@gmail.com")->send(new AccountCreation());
    }
}
