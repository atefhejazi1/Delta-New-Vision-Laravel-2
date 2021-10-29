<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $details = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('mahmoudhijazi@delta-newvision.com')->send(new ContactMail($details));
        return back()->with('message-sent' ,'Your Message has been sent successfully');
    }
}
//jvalczga87vv@delta-newvision.com
