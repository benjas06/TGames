<?php

namespace App\Http\Controllers;

use App\Plataforma;
use Illuminate\Http\Request;

class PlataformaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plataformas = plataforma::all();
        return view('plataformas.plataformasIndex', compact('plataformas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plataformas.plataformasForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|min:1'
        ]);

        //dd('entra al metodo post');
        //dd($request->all());
        $pla = new plataforma();
        //$pla->id= $request->id;
        $pla->nombre= $request->input('nombre');
        $pla->save();

        return redirect()->route('plataformas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function show(Plataforma $plataforma)
    {
        return view('plataformas.plataformasShow', compact('plataforma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function edit(Plataforma $plataforma)
    {
        return view('plataformas.plataformasForm', compact('plataforma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plataforma $plataforma)
    {
        $request->validate([
            'plataforma'=>'required|max:255'
        ]);

        $plataforma->plataforma = $request->input('plataforma');
        $plataforma->nombre=$request->nombre;
        $plataforma->save;

        return redirect()->route('plataformas.show', $plataforma->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plataforma $plataforma)
    {
        //dd('llegue a borrar');
        $plataforma->delete();
        return redirect()->route('plataformas.index');
    }
}
