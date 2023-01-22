<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;

class ContactController extends Controller
{ 
    public function show(){
        return view ('contact');
    }
    public function store (Request $request){
        //llamamos a la clase Mailable(ContactNotification.php)

        if (Mail::to('claudia.iacob@hotmail.com')->send(new ContactNotification($request->name, $request->email,$request->subject,$request->body))) {
            return redirect()->route('contact')->withMessage(['type' => 'success', 'text' => 'Mensaje enviado correctamente. En breve nos pondremos en contacto,gracias.']);
        } else {
            return redirect()->route('contact')->withMessage(['type' => 'error', 'text' => 'ERROR. Mensaje NO enviado.']);
        }      
    }
  
}
