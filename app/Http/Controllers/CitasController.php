<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function Citas(){

        $res2Citas = DB::connection('mysql')
        ->table('citas')
        ->select('id_cita','fecha','hora','motivo_cita','estado','id_animal')
        ->get();

        $titulo = 'Citas';
        return view('ProfileViews.tablascitas', compact('titulo'), compact('res2Citas'));
    }

}
