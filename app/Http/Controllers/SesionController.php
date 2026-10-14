<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function MiInterfaz(){
        try {
            $res2Usuario = DB::connection('mysql')
            ->table('usuarios')
            ->select('id_usuario','nombre','apellido_paterno','apellido_materno','telefono','direccion','correo_electronico','contrasena','rol')
            ->get();
        } catch (\Exception $e) {
            echo "Error al ejecutar  la base de datos:<br> " . $e->getMessage();
            return;
        }

        $titulo = "Dr. Woof";
        return view('ProfileViews.tablasusuario', compact('titulo', 'res2Usuario'));
    }

    public function Mylogin(){
        $titulo = "<b>Dr. Woof</b>";
        return view('AuthViews.InicioSesion', compact('titulo'));
    }

    public function InicioSesion(Request $request){
        $usuario = $request->input('usuario');
        $contrasennia = $request->input('contrasennia');

        try {
            $res2Usuario = DB::connection('mysql')
            ->table('usuarios')
            ->select('id_usuario','nombre','correo_electronico','contrasena','rol')
            ->where('correo_electronico', '=', $usuario)
            ->where('contrasena', '=', $contrasennia)
            ->first();

            return $res2Usuario ? redirect('miinterfaz')->with('success', 'Registro Exitoso') : redirect('login')->with('error', 'Usuario o contraseña incorrectos');
        }
        catch (\Exception $e) {
            Log::error("Error al ejecutar la base de datos: " . $e->getMessage());

            return redirect('login')
                ->with('error', 'El servidor no esta discponible, por favor intente más tarde.');
        }
    }
}
