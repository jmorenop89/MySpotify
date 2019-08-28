<?php

namespace App\Http\Controllers\Admin;

use App\Artista;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistaController extends Controller
{
    public function index(){
        // select * from artista
        $objects = Artista::all();
        return view('artista.index',compact('objects'));
    }

    public function create(){
        return view('artista.create');
    }

    public function store(Request $request){
        $data = $request->all();
        //dd($data);
        $obj = Artista::create($data);
        dd($obj);
    }
}
