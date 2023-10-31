<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function homepage()
    {
        return view('pages.homepage');
    }

    public function DeveloppementWeb()
    {
        return view('pages.categories.DeveloppementWeb');
    }

    public function Securiteprotection()
    {
        return view('pages.categories.Securiteprotection');
    }

    public function Optimisationmaintenance()
    {
        return view('pages.categories.Optimisationmaintenance');
    }

    public function RedactionweReferencement()
    {
        return view('pages.categories.RedactionweReferencement');
    }

    public function Gestioncontenu()
    {
        return view('pages.categories.Gestioncontenu');
    }

    public function Marketingdigital()
    {
        return view('pages.categories.Marketingdigital');
    }

    // Formulaire

    public function inscriptionClient()
    {
        return view('pages.formulaire.inscriptionClient');
    }

    public function inscriptionEtudiant()
    {
        return view('pages.formulaire.inscriptionEtudiant');
    }

    public function inscriptionRedacteur()
    {
        return view('pages.formulaire.inscriptionRedacteur');
    }

    public function connexionClient()
    {
        return view('pages.formulaire.connexionClient');
    }

    public function connexionEtudiant()
    {
        return view('pages.formulaire.connexionEtudiant');
    }

    public function connexionRedacteur()
    {
        return view('pages.formulaire.connexionRedacteur');
    }



    public function Prestations()
    {
        return view('pages.fronts.prestations');
    }

    public function contactez_nous()
    {
        return view('pages.fronts.nous-contacter');
    }

    public function devis_gratuit()
    {


        return view('pages.fronts.devis_gratuit');
    }




    public function supports()
    {
        return view('supposts');
    }



    public function faqs()
    {
        return view('pages.fronts.faqs');
    }
    public function politique_de_conf()
    {
        return view('pages.fronts.politique_de_conf');
    }
    public function qui_sommes_nous()
    {
        return view('pages.fronts.qui_sommes_nous');
    }
    public function temoignage()
    {
        return view('pages.fronts.temoignage');
    }
}
