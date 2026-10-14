<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function Galeria(){

        $res2Galeria = DB::connection('mysql')
        ->table('galeria')
        ->select('id_foto','titulo_foto','ruta_foto','fecha_foto','notas_proceso','id_animal')
        ->get();

        $titulo = 'Galería';
        return view('ProfileViews.tablasgaleria', compact('titulo'), compact('res2Galeria'));
    }

}
