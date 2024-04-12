<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maestro;

class MaestrosController extends Controller
{
    public function index()
    {
        $maestros = Maestro::all();
        return view('maestros.index', compact('maestros'));
    }

    public function create()
    {
        return view('maestros.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            // Agregar reglas de validación según tus necesidades
        ]);

        // Crear un nuevo maestro en la base de datos
        Maestro::create($request->all());

        // Redireccionar a la página de lista de maestros
        return redirect()->route('maestros.index')->with('success', 'Maestro creado correctamente');
    }

    // Otros métodos como show, edit, update, destroy según sea necesario
}
