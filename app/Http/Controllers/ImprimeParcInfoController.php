<?php

namespace App\Http\Controllers;
use App\Models\ParcInfo;
use Illuminate\Http\Request;

class ImprimeParcInfoController extends Controller
{
    public function index()
    {
        $parcinfo = ParcInfo::all();
        return view('parcinfo.imprimerparc', ['parcinfo' => $parcinfo]); 
    }
}
