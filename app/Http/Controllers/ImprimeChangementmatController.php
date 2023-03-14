<?php

namespace App\Http\Controllers;
use App\Models\ChangMat;
use Illuminate\Http\Request;

class ImprimeChangementmatController extends Controller
{
    public function index()
    {
        $changmat = ChangMat::all();
        return view('changementmat.imprimerchang', ['changmat' => $changmat]);
    }

}
