<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartillaVacunacionController extends Controller
{
    public function CartillaVacunacion(){

        $res2Cartilla = DB::connection('mysql')
        ->table('cartilla_vacunacion')
        ->select('id_cartilla','vacuna_tratamiento','fecha_aplicacion','proxima_dosis','estado','id_animal')
        ->get();

        $titulo = 'Cartilla de Vacunación';
        return view('ProfileViews.tablascartillavacunacion', compact('titulo'), compact('res2Cartilla'));
    }

}
