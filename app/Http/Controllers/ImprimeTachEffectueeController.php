<?php

namespace App\Http\Controllers;
use App\Models\TachEffectuee;
use Illuminate\Http\Request;

class ImprimeTachEffectueeController extends Controller
{
    public function index()
    {
        $TachEffectuee = TachEffectuee::all();
        return view('TachEffectuee.imprimertach', ['TachEffectuee' => $TachEffectuee]); 
    
    }
}
