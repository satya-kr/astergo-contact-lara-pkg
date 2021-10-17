<?php


namespace Astergo\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Astergo\Contact\Models\Contact;
use Astergo\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view("contact::index");
    }

    public function store(Request $request){
        // return $request->all();
        // $request->validate([
        //     'first_name' => 'required|max:255',
        //     'last_name' => 'required|max:255',
        //     'email' => 'required|email',
        //     'phone' => 'max:10',
        // ]);

        Contact::create($request->all());
        // Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Mail::to($request->email)->send(new ContactMailable($request->message, $request->name));
        return redirect(route('contact.get'))->with('success', 'Mail Sent!');
    }
}
