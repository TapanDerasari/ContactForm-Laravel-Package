<?php

namespace Tapan\ContactForm\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tapan\ContactForm\Models\ContactForm;

class ContactFormController extends Controller
{

    public function index()
    {
        return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());
        return redirect(route('contact'))->with(['message' => 'Thank you, your message has been sent. We\'ll contact you very soon.']);
    }


}