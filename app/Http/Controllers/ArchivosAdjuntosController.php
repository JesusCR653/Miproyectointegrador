<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArchivosAdjuntosController extends Controller
{
    public function ArchivosAdjuntos(){

        $res2Archivos = DB::connection('mysql')
        ->table('archivos_adjuntos')
        ->select('id_archivo','nombre_archivo','ruta_almacenamiento','id_historial')
        ->get();

        $titulo = 'Archivos Adjuntos';
        return view('ProfileViews.tablasarchivosadjuntos', compact('titulo'), compact('res2Archivos'));
    }

}
