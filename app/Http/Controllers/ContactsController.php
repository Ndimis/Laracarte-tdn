<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class ContactsController extends Controller
{
   public function create() {
    	return view('contacts.create');
    }
    public function store(ContactFormRequest $request) {
    	
    	$message = Message::create($request->only('name','email','message'));

    	Mail::to(config('laracarte.admin_support_email'))->send(new ContactMessageCreated($message));

    	flashy()->success('Nous vous repondrons dans les plus bref délais');

    	return redirect()->route('home');

    }
}
