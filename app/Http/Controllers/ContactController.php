<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactRequest $request) 
    {
        Mail::to(env('MAIL_TO_ADDRESS', env('MAIL_FROM_ADDRESS')))->send(new ContactMail(
            $request->full_name,
            $request->email_address,
            $request->phone_number,
            $request->email_subject,
            $request->message_details
        ));

        return to_route('contact.submit')->with('msg_sent', 'Your message has been sent successfully!');

        return response()->json([
            'message' => 'Your message has been sent successfully!'
        ]);
    }
}
