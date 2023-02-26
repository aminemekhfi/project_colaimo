<?php

namespace App\Http\Controllers;

use App\Models\ChangMat;
use Illuminate\Http\Request;

class ChangMatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $changmat = ChangMat::all();
        return view('changementmat.index', ['changmat' => $changmat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('changementmat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChangMatRequest  $request
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

            ChangMat::create($request->post());
            return redirect()->route('changmat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChangMat  $changMat
     * @return \Illuminate\Http\Response
     */
    public function show(ChangMat $changmat)
    {
        return view('changementmat.show', ['changmat' => $changmat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChangMat  $changMat
     * @return \Illuminate\Http\Response
     */
    public function edit(ChangMat $changmat)
    {
        return view('changementmat.edit', ['changmat' => $changmat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChangMatRequest  $request
     * @param  \App\Models\ChangMat  $changMat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChangMat $changmat)
    {
        $request->validate([
            'CodeEquip' => 'required',
            'TypeEquip' => 'required',
            'MarEquip' => 'required',
            'SerieEquip' => 'required',
            'InfoEquip' => 'required'
        ]);
        $changmat->fill($request->post())->save();
        return redirect()->route('changmat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChangMat  $changMat
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChangMat $changmat)
    {
        $changmat->delete();
        return redirect()->route('changmat.index');
    }
}
