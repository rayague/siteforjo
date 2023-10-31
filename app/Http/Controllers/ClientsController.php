<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\Console\Input\Input;

class ClientsController extends Controller
{
    public function showRegistrationForm()
    {
        return view('pages.formulaire.inscriptionClient');
    }

    public function register()
    {
        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'email', 'unique:clients'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'same:password'],
        ]);

        $clients = new Client();
        $clients->nom = request('nom');
        $clients->prenom = request('prenom');
        $clients->email = request('email');
        $clients->password = Hash::make(request('password'));
        $clients->save();

        return redirect()->route('dashboardClient')->with('message', 'Les données ont bien étés insérées dans la base de donnéé');
    }


    public function dashboardClient()
    {
        return view('pages.dashboards.Client.homeClient');
    }





    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $client = Client::where('email', $request->input('email'))->first();

        if ($client) {
            if (Hash::check($request->input('password'), $client->password)) {
                $request->session()->put('client', $client);
                return redirect()->route('dashboardClient');
            } else {
                return ('status \'Identifiants incorrects');
            }
        } else {
            return ('Désolé vous n\'avez pas de compte avec cet email');
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    // AuthController.php
    public function logout()
    {
        // Déconnectez l'utilisateur ici
        auth()->logout();

        // Redirigez l'utilisateur vers la page de connexion ou une autre page appropriée
        return redirect('/Connexion-Client');
    }
}
