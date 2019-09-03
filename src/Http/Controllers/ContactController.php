<?php

namespace Kevalonly\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Http\Request;
use Kevalonly\Contact\Models\Contact;
use Kevalonly\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contact::contact');
    }
    public function send(Request $request)
    {
    	Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
    	$input = $request->except('submit');
    	Contact::create($input);
    	return redirect(route('contact'));
    }
}
