<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    function index()
    {
        $message = Contact::all();
        return view('admin.contact')
                ->withMessage($message);
    }
    function receiveMessage(Request $request)
    {
        $session = session('user');
        $user = $session->id;
        $message = new Contact;
        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->user_id = $user;
        $message->save();
        return redirect(route('index'));

    }
}
