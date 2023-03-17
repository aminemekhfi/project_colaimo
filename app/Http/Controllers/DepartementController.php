<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departement.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredepartementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')){
            $request->validate([
                'nom'=>'required',
            ]);
        }
        $request->validate([
                'nom'=>'required',
        ]);
        departement::create($request->post());
        return redirect()->route('TachEffectuee.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show(departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(departement $departement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedepartementRequest  $request
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedepartementRequest $request, departement $departement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(departement $departement)
    {
        //
    }
}
