<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use App\Juegos;
use Illuminate\Http\Request;

class JuegosController extends Controller
{
    public function index()
    {
        $jueg = Juegos::all();

        //$jueg= DB::table('juegos')
        //->where('id','1')
        //->get();

        return view('juegos.juegos', compact('jueg'));
    }
}
