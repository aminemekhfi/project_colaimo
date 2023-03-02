<?php

namespace App\Http\Controllers;

use App\Models\autresequip;
use Illuminate\Http\Request;

class AutresequipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autresequip = autresequip::all();
        return view('autresequip.index', ['autresequip' => $autresequip]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autresequip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreautresequipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')){
            $request->validate([
                'CodeEquip' => 'required',
                'TypeEquip' => 'required',
                'MarEquip' => 'required',
                'SerieEquip' => 'required',
                'InfoEquip' => 'required'
            ]);
        }

        $request->validate([
            'CodeEquip' => 'required',
            'TypeEquip' => 'required',
            'MarEquip' => 'required',
            'SerieEquip' => 'required',
            'InfoEquip' => 'required'
        ]);

            autresequip::create($request->post());
            return redirect()->route('autresequip.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autresequip  $autresequip
     * @return \Illuminate\Http\Response
     */
    public function show(autresequip $autresequip)
    {
        return view('autresequip.show', ['autresequip' => $autresequip]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autresequip  $autresequip
     * @return \Illuminate\Http\Response
     */
    public function edit(autresequip $autresequip)
    {
        return view('autresequip.edit', ['autresequip' => $autresequip]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateautresequipRequest  $request
     * @param  \App\Models\autresequip  $autresequip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autresequip $autresequip)
    {
        $request->validate([
            'CodeEquip' => 'required',
            'TypeEquip' => 'required',
            'MarEquip' => 'required',
            'SerieEquip' => 'required',
            'InfoEquip' => 'required'
        ]);
        $autresequip->fill($request->post())->save();
        return redirect()->route('autresequip.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autresequip  $autresequip
     * @return \Illuminate\Http\Response
     */
    public function destroy(autresequip $autresequip)
    {
        $autresequip->delete();
        return redirect()->route('autresequip.index');
    }
}
