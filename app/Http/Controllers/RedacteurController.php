<?php

namespace App\Http\Controllers;

use App\Models\Redacteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RedacteurController extends Controller
{
    public function register()
    {
        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'unique:redacteurs'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'same:password'],
        ]);

        $redacteur = new Redacteur();

        $redacteur->nom = request('nom');
        $redacteur->prenom = request('prenom');
        $redacteur->email = request('email');
        $redacteur->password = Hash::make(request('password'));
        $redacteur->save();

        return redirect()->route('dashboardRedacteur');
    }


    public function dashboardRedacteur()
    {
        return view('pages.dashboards.Redacteur.homeRedacteur');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $redacteur = Redacteur::where('email', $request->input('email'))->first();

        if ($redacteur) {
            if (Hash::check($request->input('password'), $redacteur->password)) {
                $request->session()->put('client', $redacteur);
                return redirect()->route('dashboardClient');
            } else {
                return ('status \'Identifiants incorrects');
            }
        } else {
            return ('Désolé vous n\'avez pas de compte avec cet email');
        }
    }

    // AuthController.php
    public function logout()
    {
        // Déconnectez l'utilisateur ici
        auth()->logout();

        // Redirigez l'utilisateur vers la page de connexion ou une autre page appropriée
        return redirect('/Connexion-Redacteur');
    }
}
