<?php

namespace App\Http\Controllers;

use App\Juegos;
use Illuminate\Http\Request;

class JuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jueg = Juegos::all();
        return view('juegos.juegos', compact('jueg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juegos.juegosForm');
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
            'nombre' => 'required|min:2|max:255',
            'genero' => 'required|min:3|max:20',
        ]);

        $jueg = new Juegos();
        $jueg->nombre = $request->input('nombre');
        $jueg->genero = $request->genero;
        $jueg->save();

        return redirect()->route('juegos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Juegos  $juego
     * @return \Illuminate\Http\Response
     */
    public function show(Juegos $juego)
    {
        return view('juegos.juegosShow', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Juegos  $juego
     * @return \Illuminate\Http\Response
     */
    public function edit(Juegos $juego)
    {
        return view('juegos.juegosForm', compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Juegos  $juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juegos $juego)
    {
        $juego->juego = $request->input('juegos');
        $juego->nombre=$request->nombre;
        $juego->save;
        
        return redirect()->route('juegos.show', $juego->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Juegos  $juego
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juegos $juego)
    {
        $juego->delete();
        return redirect()->route('juegos.index');
    }
}
