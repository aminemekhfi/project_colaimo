<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;
use PDF;

class StagiaireController extends Controller
{
    public function __construct()
    {
    $this->authorizeResource( Stagiaire::class, 'Stagiaire');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Stagiaire = Stagiaire::all();
        return view('Stagiaire.index', ['Stagiaire' => $Stagiaire]); 
    
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Stagiaire.create');  
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')){
            $request->validate([
                'CodeStag'=>'required',
                'NCIN'=>'required',
                'Nom'=>'required',
                'Prenom'=>'required',
                'DN'=>'required',
                'Tel'=>'required',
                'Email'=>'required',
                'Etab'=>'required',
                'Branch'=>'required',
                'Niveau'=>'required',
                'TyStage'=>'required',
                'Ddebut'=>'required',
                'Dfin'=>'required',
            ]);
        }
        $request->validate([
                'CodeStag'=>'required',
                'NCIN'=>'required',
                'Nom'=>'required',
                'Prenom'=>'required',
                'DN'=>'required',
                'Tel'=>'required',
                'Email'=>'required',
                'Etab'=>'required',
                'Branch'=>'required',
                'Niveau'=>'required',
                'TyStage'=>'required',
                'Ddebut'=>'required',
                'Dfin'=>'required',
        ]);
        Stagiaire::create($request->post());
        return redirect()->route('Stagiaire.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function show(Stagiaire $Stagiaire)
    {
        return view ('Stagiaire.show', ['Stagiaire' => $Stagiaire]);
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Stagiaire $Stagiaire)
    {
        return view ('Stagiaire.edit', ['Stagiaire' => $Stagiaire]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stagiaire $Stagiaire)
    {
        $request->validate([
            'CodeStag'=>'required',
                'NCIN'=>'required',
                'Nom'=>'required',
                'Prenom'=>'required',
                'DN'=>'required',
                'Tel'=>'required',
                'Email'=>'required',
                'Etab'=>'required',
                'Branch'=>'required',
                'Niveau'=>'required',
                'TyStage'=>'required',
                'Ddebut'=>'required',
                'Dfin'=>'required',
        ]);
        $Stagiaire->fill($request->post())->save();
        return redirect()->route('Stagiaire.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stagiaire $Stagiaire)
    {
        $Stagiaire->delete();
        return redirect()->route('Stagiaire.index');
    }
}
