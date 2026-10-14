<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RecordatoriosController extends Controller
{
    public function Recordatorios(){
        $usuario = request('Jesus');
        
        $resRecordatorio = DB::connection('mysql')
        ->table('recordatorios')
        ->select('id_recordatorio','fecha','hora','repetir','motivo','id_animal')
        ->where('id_animal','=',$usuario)
        ->first();

        $res2Recordatorio = DB::connection('mysql')
        ->table('recordatorios')
        ->select('id_recordatorio','fecha','hora','repetir','motivo','id_animal')
        ->get();

        foreach($res2Recordatorio as $dato){
            //echo $dato->nombre_completo."<br>".
            $dato->id_animal."<br>";
        }
        
        $titulo = 'Recordatorios';
        return view('ProfileViews.tablasrecordatorios', compact('titulo'), compact('res2Recordatorio'));
        }

}
