<?php

namespace App\Http\Controllers;

use App\Models\TachEffectuee;
use Illuminate\Http\Request;

class TachEffectueeController extends Controller
{
    public function __construct()
    {
    $this->authorizeResource( TachEffectuee::class, 'TachEffectuee');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TachEffectuee = TachEffectuee::all();
        return view('TachEffectuee.index', ['TachEffectuee' => $TachEffectuee]); 
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TachEffectuee.create');
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
                'CodeTache' => 'required',
                'DateTache' => 'required',
                'Depar' => 'required',
                'Service' => 'required',
                'TacheEffec' => 'required',
                'Commantaire' => 'required',
            ]);
        }

        $request->validate([
            'CodeTache' => 'required',
                'DateTache' => 'required',
                'Depar' => 'required',
                'Service' => 'required',
                'TacheEffec' => 'required',
                'Commantaire' => 'required',
        ]);

           TachEffectuee::create($request->post());
           return redirect()->route('TachEffectuee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TachEffectuee  $tachEffectuee
     * @return \Illuminate\Http\Response
     */
    public function show(TachEffectuee $TachEffectuee)
    {
        return view ('TachEffectuee.show', ['TachEffectuee' => $TachEffectuee]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TachEffectuee  $tachEffectuee
     * @return \Illuminate\Http\Response
     */
    public function edit(TachEffectuee $TachEffectuee)
    {
        return view ('TachEffectuee.edit', ['TachEffectuee'=> $TachEffectuee]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\TachEffectuee  $tachEffectuee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TachEffectuee $TachEffectuee)
    {
        $request->validate([
            'CodeTache' => 'required',
                'DateTache' => 'required',
                'Depar' => 'required',
                'Service' => 'required',
                'TacheEffec' => 'required',
                'Commantaire' => 'required',
        ]);
        $TachEffectuee->fill($request->post())->save();
        return redirect()->route('TachEffectuee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TachEffectuee  $tachEffectuee
     * @return \Illuminate\Http\Response
     */
    public function destroy(TachEffectuee $TachEffectuee)
    {
        $TachEffectuee->delete();
        return redirect()->route('TachEffectuee.index');
    }
}
