<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ParcInfo;
use App\Models\Stagiaire;
use App\Models\TachEffectuee;
use App\Models\ChangMat;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $Users = User::count();
        $ParcInfo = ParcInfo::count();
        $Stagiaires = Stagiaire::count();
        $TachEffectuees = TachEffectuee::count();
        $ChangMats = ChangMat::count();

        return view('dashboard', compact('Users','ParcInfo','Stagiaires','TachEffectuees','ChangMats')  
    
    );
    }
}
