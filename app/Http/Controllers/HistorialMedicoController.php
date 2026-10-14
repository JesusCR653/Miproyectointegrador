<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HistorialMedicoController extends Controller
{
    public function HistorialMedico(){

        $res2Historial = DB::connection('mysql')
        ->table('historial_medico')
        ->select('id_historial','peso_actual','diagnostico','fecha_consulta','proxima_revision','id_animal')
        ->get();

        $titulo = 'Historial Médico';
        return view('ProfileViews.tablashistorialmedico', compact('titulo'), compact('res2Historial'));
    }

}
