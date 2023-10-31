<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\RedacteurController;
use App\Models\Etudiant;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ViewsController::class, 'homepage']);


Route::get('/Developpement_Web', [ViewsController::class, 'DeveloppementWeb'])->name('DeveloppementWeb');
Route::get('/Securite-Protection_en_ligne', [ViewsController::class, 'Securiteprotection'])->name('Securiteprotection');
Route::get('/Optimisation-maintenance', [ViewsController::class, 'Optimisationmaintenance'])->name('Optimisationmaintenance');
Route::get('/Redaction-Web', [ViewsController::class, 'RedactionweReferencement'])->name('RedactionweReferencement');
Route::get('/Gestion-de-contenu', [ViewsController::class, 'Gestioncontenu'])->name('Gestioncontenu');
Route::get('/Market-digital', [ViewsController::class, 'Marketingdigital'])->name('Marketingdigital');


// Connexion

Route::get('/Connexion-Client', [ViewsController::class, 'connexionClient'])->name('connexionClient');
// Route::get('/Connexion-Client', [ClientsController::class, 'login'])->name('loginClient');
Route::post('/Connexion-Client', [ClientsController::class, 'logout'])->name('deconnexionClient');




// Route pour afficher le formulaire de connexion
Route::get('/login', [ViewsController::class, 'connexionClient'])->name('login');

// Route pour traiter la demande de connexion
Route::post('/login', [ClientsController::class, 'login']);





Route::get('/Connexion-Etudiant', [ViewsController::class, 'connexionEtudiant'])->name('connexionEtudiant');
Route::post('/Connexion-Etudiant', [EtudiantController::class, 'login']);
Route::post('/Connexion-Etudiant', [EtudiantController::class, 'logout'])->name('deconnexionEtudiant');

Route::get('/Connexion-Redacteur', [ViewsController::class, 'connexionRedacteur'])->name('connexionRedacteur');
Route::post('/Connexion-Redacteur', [RedacteurController::class, 'login']);
Route::post('/Connexion-Redacteur', [RedacteurController::class, 'logout'])->name('deconnexionRedacteur');

Route::get('/Inscription-Client', [ViewsController::class, 'inscriptionClient'])->name('register');
Route::post('/Inscription-Client', [ClientsController::class, 'register']);

Route::get('/Inscription-Etudiant', [ViewsController::class, 'inscriptionEtudiant'])->name('inscriptionEtudiant');
Route::post('/Inscription-Etudiant', [EtudiantController::class, 'Register']);

Route::get('/Inscription-Redacteur', [ViewsController::class, 'inscriptionRedacteur'])->name('inscriptionRedacteur');
Route::post('/Inscription-Redacteur', [RedacteurController::class, 'register']);

Route::get('/Contactez-nous', [ViewsController::class, 'contactez_nous'])->name('contactez-nous');
Route::post('/Contactez-nous', [ContactController::class, 'sendEmail']);



Route::get('/Prestation', [ViewsController::class, 'Prestations'])->name('Prestations');
Route::get('/Demander un Devis Gratuitement', [ViewsController::class, 'devis_gratuit'])->name('devis_gratuit');


Route::get('/dashboard_client', [ClientsController::class, 'dashboardClient'])->name('dashboardClient');
Route::get('/dashboard_etudiant', [EtudiantController::class, 'dashboardEtudiant'])->name('dashboardEtudiant');
Route::get('/dashboard_redacteur', [RedacteurController::class, 'dashboardRedacteur'])->name('dashboardRedacteur');


Route::get('supports', [ViewsController::class, 'supports'])->name('supports');
Route::get('temoignage', [ViewsController::class, 'temoignage'])->name('temoignage');
Route::get('qui_sommes_nous', [ViewsController::class, 'qui_sommes_nous'])->name('qui_sommes_nous');
Route::get('faqs', [ViewsController::class, 'faqs'])->name('faqs');
Route::get('politique_de_conf', [ViewsController::class, 'politique_de_conf'])->name('politique_de_conf');
