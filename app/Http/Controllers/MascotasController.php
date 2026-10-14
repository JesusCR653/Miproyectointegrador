<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    public function Mascotas(){
        $usuario = request('Jesus');
        
        $resMascota = DB::connection('mysql')
        ->table('animal')
        ->select('id_animal','nombre','raza','edad','sexo','color','peso','fecha_nacimiento','alergias','tratamiento','id_usuario','tipo_mascota','observaciones_adicionales')
        ->where('nombre','=',$usuario)
        ->first();

        $res2Mascota = DB::connection('mysql')
        ->table('animal')
        ->select('id_animal','nombre','raza','edad','sexo','color','peso','fecha_nacimiento','alergias','tratamiento','id_usuario','tipo_mascota','observaciones_adicionales')
        ->get();

        foreach($res2Mascota as $dato){
            //echo $dato->nombre_completo."<br>".
            $dato->nombre."<br>";
        }
        
        $titulo = 'Mascotas';
        return view('ProfileViews.tablasmascotas', compact('titulo'), compact('res2Mascota'));
        }

}
