<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function inicio()
    {
        return view('ClientesViews.inicio');
    }
    public function vistacrear()
    {
        return view('ClientesViews.vistacrear');
    }
    public function guardarcliente()
    {
        return view('ClientesViews.guardarcliente');
    }
    public function buscar()
    {
        return view('ClientesViews.buscarcliente');
    }
    public function vistaeditar($id)
    {
        return view('ClientesViews.vistaeditar', ['id' => $id]);
    }
    public function editarcliente($id)
    {
        return view('ClientesViews.editarcliente', ['id' => $id]);
    }
    public function actualizarcliente($id)
    {
        return view('ClientesViews.actualizarcliente', ['id' => $id]);
    }
    public function eliminarcliente(Request $request, $id)
    {
        return 'cliente eliminado con id: ' . $id;
        //return view('ClientesViews.eliminarcliente', ['id' => $id]);
    }
}
