<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
    	return view('mail');
    }

    public function send()
    {
    	$adress = request('adress');
    	$theme = request('theme');
    	$message = request('message');

    	SendMail::dispatch($adress, $theme, $message);
    }
}

