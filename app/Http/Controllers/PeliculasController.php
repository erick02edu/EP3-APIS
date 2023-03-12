<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeliculasController extends Controller
{
    public function ConsultarTabla(){
        $datos=DB::select('select * from peliculas');
        
        return view("Inicio")->with("datos",$datos);#Enviar la variable datos
    }

    public function store(Request $request)
    {
        $pelicula=request()->except("_token");

        if($request->hasFile("Poster"));{
            $datos["Poster"]=$request->file("Poster")->store("uploads","public");
        }

        PeliculasController::insert($pelicula);
        //return response()->json($pelicula);
        // Redireccionar a una ruta establecida
        return redirect()->route('/Inicio');
    }
}
