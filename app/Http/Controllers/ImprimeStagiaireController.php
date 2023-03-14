<?php

namespace App\Http\Controllers;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class ImprimeStagiaireController extends Controller
{
    public function index()
    {
    $Stagiaire = Stagiaire::all();
    return view('Stagiaire.imprimerstag', ['Stagiaire' => $Stagiaire]); 
    }
}
