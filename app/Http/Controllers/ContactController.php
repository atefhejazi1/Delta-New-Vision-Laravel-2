<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

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
        Mail::to('jvalczga87vv@delta-newvision.com')->send(new ContactMail($details));
        return back()->with('message-sent' ,'Your Message has been sent successfully');
    }
}
