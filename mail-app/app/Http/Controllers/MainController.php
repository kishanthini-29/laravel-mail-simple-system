<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class MainController extends Controller
{
    //
    public function sendContactMail(Request $request)
    {
        $contact_data = [];
        $contact_data['name'] = $request->input('name');
        $contact_data['email'] = $request->input('email');
        $contact_data['message'] = $request->input('message');

        Mail::to('dinusan.t97@gmail.com')->send(new ContactFormMail($contact_data));

        return redirect()->back()->withSuccess('email has been send');
    }
}
