<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function Comentarios(){

        $res2Comentarios = DB::connection('mysql')
        ->table('comentarios')
        ->select('id_comentario','comentario','id_usuario','fecha_registro')
        ->get();

        $titulo = 'Comentarios';
        return view('ProfileViews.tablascomentarios', compact('titulo'), compact('res2Comentarios'));
    }

}
