<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validation du formulaire
        request()->validate([
            'nom' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
        ]);

        // Enregistrement du contact dans la base de données
        $contact = new Contact();
        $contact->nom = $request->input('nom');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        // Envoi de l'e-mail
        // Mail::to('ledigitalmaster@gmail.com')->send(new ContactMail($request->all()));

        // Rediriger avec un message de succès
        return redirect()->route('home')->with('success', 'Votre message a été envoyé avec succès.');
    }
}
