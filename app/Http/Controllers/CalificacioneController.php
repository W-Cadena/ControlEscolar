<?php

namespace App\Http\Controllers;

use App\Models\Calificacione;
use App\Models\Alumno;
use App\Models\Materia;
use Illuminate\Http\Request;

/**
 * Class CalificacioneController
 * @package App\Http\Controllers
 */
class CalificacioneController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:calificacion-list|calificacion-create|calificacion-edit|calificacion-delete', ['only' => ['index','store']]);
         $this->middleware('permission:calificacion-create', ['only' => ['create','store']]);
         $this->middleware('permission:calificacion-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:calificacion-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificaciones = Calificacione::paginate();
        $alumnos = Alumno::all();
        $materia = Materia::all();

        return view('calificacione.index', compact('calificaciones','alumnos','materia'))
            ->with('i', (request()->input('page', 1) - 1) * $calificaciones->perPage());
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calificacione = new Calificacione();
        return view('calificacione.create', compact('calificacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Calificacione::$rules);

        $calificacione = Calificacione::create($request->all());

        return redirect()->route('calificaciones.index')
            ->with('success', 'Calificacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calificacione = Calificacione::find($id);

        return view('calificacione.show', compact('calificacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calificacione = Calificacione::find($id);

        return view('calificacione.edit', compact('calificacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Calificacione $calificacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calificacione $calificacione)
    {
        request()->validate(Calificacione::$rules);

        $calificacione->update($request->all());

        return redirect()->route('calificaciones.index')
            ->with('success', 'Calificacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $calificacione = Calificacione::find($id)->delete();

        return redirect()->route('calificaciones.index')
            ->with('success', 'Calificacione deleted successfully');
    }
}
