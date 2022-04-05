<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;

class NotasController extends Controller
{
    public function index(){
        $notas = Notas::all();
    
        return view('notas', ['notas' => $notas]);
    }

    public function agregar() {
        return view('agregar');
    }

    public function crear(Request $request){
        Notas::create([
            'titulo' => $request -> input('title'),
            'contenido' => $request -> input('content'),
        ]);
    
        return redirect('/');
    
    }

    public function editar($id) {
        $notas = Notas::find($id); //DB::table('notas')->where('id', $id)->first();
    
        return view('editar', ['notas' => $notas]);
        //return 'Aquí se va a editar la nota: ' .$id;
    }

    public function id($id) {
        return 'Aquí veremos el detalle de la nota: '.$id;
    }
}
