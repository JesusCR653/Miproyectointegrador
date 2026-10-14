<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    private $campos = ['id_usuario','nombre','apellido_paterno','apellido_materno','telefono','direccion','correo_electronico','contrasena','rol'];

    public function Usuarios(){
        $usuario = request('Jesus');
        
        $resUsuario = DB::connection('mysql')
        ->table('usuarios')
        ->select($this->campos)
        ->where('nombre','=',$usuario)
        ->first();

        $res2Usuario = DB::connection('mysql')
        ->table('usuarios')
        ->select($this->campos)
        ->get();

        $titulo = 'Usuarios';
        return view('ProfileViews.tablasusuario', compact('titulo'), compact('res2Usuario'));
    }

    // Muestra el formulario para crear
    public function vistacrear()
    {
        $titulo = 'Nuevo usuario';
        return view('UsuariosViews.vistacrear', compact('titulo'));
    }

    // Guarda un usuario nuevo
    public function guardarusuario(Request $request)
    {
        $request->validate([
            'nombre'             => 'required|string|max:100',
            'apellido_paterno'   => 'required|string|max:100',
            'apellido_materno'   => 'nullable|string|max:100',
            'telefono'           => 'nullable|string|max:20',
            'direccion'          => 'nullable|string|max:255',
            'correo_electronico' => 'required|email|max:150',
            'contrasena'         => 'required|string|max:100',
            'rol'                => 'required|string|max:50',
        ]);

        try {
            DB::connection('mysql')->table('usuarios')->insert([
                'nombre'             => $request->input('nombre'),
                'apellido_paterno'   => $request->input('apellido_paterno'),
                'apellido_materno'   => $request->input('apellido_materno'),
                'telefono'           => $request->input('telefono'),
                'direccion'          => $request->input('direccion'),
                'correo_electronico' => $request->input('correo_electronico'),
                'contrasena'         => $request->input('contrasena'),
                'rol'                => $request->input('rol'),
            ]);
            return redirect('/usuarios')->with('success', 'Usuario guardado correctamente');
        } catch (\Exception $e) {
            Log::error('Error al guardar usuario: ' . $e->getMessage());
            return redirect('/usuarios/vistacrear')->withInput()->with('error', 'No se pudo guardar el usuario');
        }
    }

    // Busca por nombre, apellidos o correo (?q=texto)
    public function buscar(Request $request)
    {
        $q = $request->input('q');

        $res2Usuario = DB::connection('mysql')
        ->table('usuarios')
        ->select($this->campos)
        ->where(function ($query) use ($q) {
            $query->where('nombre', 'like', "%$q%")
                  ->orWhere('apellido_paterno', 'like', "%$q%")
                  ->orWhere('apellido_materno', 'like', "%$q%")
                  ->orWhere('correo_electronico', 'like', "%$q%");
        })
        ->get();

        $titulo = 'Usuarios';
        return view('ProfileViews.tablasusuario', compact('titulo', 'res2Usuario'));
    }

    // Muestra el formulario de edición con los datos actuales
    public function vistaeditar($id)
    {
        $usuario = DB::connection('mysql')
        ->table('usuarios')
        ->select($this->campos)
        ->where('id_usuario', '=', $id)
        ->first();

        if (!$usuario) {
            return redirect('/usuarios')->with('error', 'El usuario no existe');
        }

        $titulo = 'Editar usuario';
        return view('UsuariosViews.vistaeditar', compact('titulo', 'usuario'));
    }

    // Ruta /{id}/editarusuario: lleva al mismo formulario de edición
    public function editarusuario($id)
    {
        return redirect('/usuarios/' . $id . '/vistaeditar');
    }

    // Guarda los cambios
    public function actualizarusuario(Request $request, $id)
    {
        $request->validate([
            'nombre'             => 'required|string|max:100',
            'apellido_paterno'   => 'required|string|max:100',
            'apellido_materno'   => 'nullable|string|max:100',
            'telefono'           => 'nullable|string|max:20',
            'direccion'          => 'nullable|string|max:255',
            'correo_electronico' => 'required|email|max:150',
            'contrasena'         => 'required|string|max:100',
            'rol'                => 'required|string|max:50',
        ]);

        try {
            DB::connection('mysql')->table('usuarios')
            ->where('id_usuario', '=', $id)
            ->update([
                'nombre'             => $request->input('nombre'),
                'apellido_paterno'   => $request->input('apellido_paterno'),
                'apellido_materno'   => $request->input('apellido_materno'),
                'telefono'           => $request->input('telefono'),
                'direccion'          => $request->input('direccion'),
                'correo_electronico' => $request->input('correo_electronico'),
                'contrasena'         => $request->input('contrasena'),
                'rol'                => $request->input('rol'),
            ]);
            return redirect('/usuarios')->with('success', 'Usuario actualizado correctamente');
        } catch (\Exception $e) {
            Log::error('Error al actualizar usuario: ' . $e->getMessage());
            return redirect('/usuarios/' . $id . '/vistaeditar')->withInput()->with('error', 'No se pudo actualizar el usuario');
        }
    }

    // Elimina un usuario
    public function eliminarusuario(Request $request, $id)
    {
        try {
            DB::connection('mysql')->table('usuarios')
            ->where('id_usuario', '=', $id)
            ->delete();
            return redirect('/usuarios')->with('success', 'Usuario eliminado con id: ' . $id);
        } catch (\Exception $e) {
            Log::error('Error al eliminar usuario: ' . $e->getMessage());
            return redirect('/usuarios')->with('error', 'No se pudo eliminar el usuario');
        }
    }
}