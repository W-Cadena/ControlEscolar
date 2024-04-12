<?php

namespace App\Http\Controllers;

use App\Models\ControlMateria;
use App\Models\Alumno;
use App\Models\Materia;
use Illuminate\Http\Request;

/**
 * Class ControlMateriaController
 * @package App\Http\Controllers
 */
class ControlMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controlMaterias = ControlMateria::paginate();

        return view('control-materia.index', compact('controlMaterias'))
            ->with('i', (request()->input('page', 1) - 1) * $controlMaterias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $controlMateria = new ControlMateria();
        $materias = Materia::all();
        $alumnos = Alumno::all();
        return view('control-materia.create', compact('controlMateria','materias','alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ControlMateria::$rules);

        $controlMateria = ControlMateria::create($request->all());

        return redirect()->route('control-materia.index')
            ->with('success', 'ControlMateria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $controlMateria = ControlMateria::find($id);

        return view('control-materia.show', compact('controlMateria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $controlMateria = ControlMateria::find($id);
        $materias = Materia::all();
        $alumnos = Alumno::all();

        return view('control-materia.edit', compact('controlMateria','materias','alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ControlMateria $controlMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ControlMateria $controlMateria)
    {
        request()->validate(ControlMateria::$rules);

        $controlMateria->update($request->all());

        return redirect()->route('control-materia.index')
            ->with('success', 'ControlMateria updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $controlMateria = ControlMateria::find($id)->delete();

        return redirect()->route('control-materia.index')
            ->with('success', 'ControlMateria deleted successfully');
    }
}
