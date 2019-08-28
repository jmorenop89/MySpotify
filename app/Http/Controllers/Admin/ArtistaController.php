<?php

namespace App\Http\Controllers\Admin;

use App\Artista;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistaController extends Controller
{
    public function index(){
        // select * from artista
        $objects = Artista::paginate(4);
        return view('artista.index',compact('objects'));
    }

    public function create(){
        return view('artista.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $obj = Artista::create($data);
        return redirect()->route('artista.index');
    }

    public function edit($id){
        $object = Artista::find($id);
        #dd($object);
        return view('artista.edit',compact('object'));
    }

    public function update(Request $request,$id){
        $object = Artista::find($id);
        $data = $request->all();
        $object->update($data);
        return redirect()->route('artista.index');
    }
}
