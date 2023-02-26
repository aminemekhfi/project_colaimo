<?php

namespace App\Http\Controllers;

use App\Models\ParcInfo;
use Illuminate\Http\Request;

class ParcInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcinfo = ParcInfo::all();
        return view('parcinfo.index', ['parcinfo' => $parcinfo]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parcinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')){
            $request->validate([
                'Departement' => 'required',
                'Service' => 'required',
                'Tord' => 'required',
                'Mord' => 'required',
                'TEc' => 'required',
                'MEc' => 'required',
                'TMClav' => 'required',
                'TMSour' => 'required',
                'SysExp' => 'required',
                'Antivirus' => 'required',
                'AdresseIP' => 'required',
                'HardDrive' => 'required',
                'RAM' => 'required',
                'LecteurCD' => 'required',
                'Imprimante' => 'required'
            ]);
        }

        $request->validate([
            'Departement' => 'required',
            'Service' => 'required',
            'Tord' => 'required',
            'Mord' => 'required',
            'TEc' => 'required',
            'MEc' => 'required',
            'TMClav' => 'required',
            'TMSour' => 'required',
            'SysExp' => 'required',
            'Antivirus' => 'required',
            'AdresseIP' => 'required',
            'HardDrive' => 'required',
            'RAM' => 'required',
            'LecteurCD' => 'required',
            'Imprimante' => 'required'
        ]);

           ParcInfo::create($request->post());
           return redirect()->route('parcinfo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ParcInfo $parcinfo)
    {
        return view ('parcinfo.show', ['parcinfo' => $parcinfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ParcInfo $parcinfo)
    {
        return view ('parcinfo.edit', ['parcinfo'=> $parcinfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParcInfo $parcinfo)
    {
        $request->validate([
            'Departement' => 'required',
            'Service' => 'required',
            'Tord' => 'required',
            'Mord' => 'required',
            'TEc' => 'required',
            'MEc' => 'required',
            'TMClav' => 'required',
            'TMSour' => 'required',
            'SysExp' => 'required',
            'Antivirus' => 'required',
            'AdresseIP' => 'required',
            'HardDrive' => 'required',
            'RAM' => 'required',
            'LecteurCD' => 'required',
            'Imprimante' => 'required'
        ]);
        $parcinfo->fill($request->post())->save();
        return redirect()->route('parcinfo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParcInfo $parcinfo)
    {
        $parcinfo->delete();
        return redirect()->route('parcinfo.index');
    }
}
