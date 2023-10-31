<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Redacteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    public function register()
    {
        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'email', 'unique:etudiants'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'same:password'],
        ]);


        $etudiant = new Etudiant();

        $etudiant->nom = request('nom');
        $etudiant->prenom = request('prenom');
        $etudiant->email = request('email');
        $etudiant->password = Hash::make(request('password'));
        $etudiant->save();

        return redirect()->route('dashboardEtudiant')->with('message', 'Les données ont bien étés insérées dans la base de donnéé');
    }


    public function dashboardEtudiant()
    {
        return view('pages.dashboards.Etudiant.homeEtudiant');
    }



    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $etudiant = Etudiant::where('email', $request->input('email'))->first();

        if ($etudiant) {
            if (Hash::check($request->input('password'), $etudiant->password)) {
                $request->session()->put('client', $etudiant);
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
        return redirect('/Connexion-Etudiant');
    }
}
