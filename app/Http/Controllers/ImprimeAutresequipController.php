<?php

namespace App\Http\Controllers;
use App\Models\autresequip;
use Illuminate\Http\Request;

class ImprimeAutresequipController extends Controller
{
    public function index()
    {
        $autresequip = autresequip::all();
        return view('autresequip.imprimerautre', ['autresequip' => $autresequip]); 
    }
}
