<?php

namespace App\Http\Controllers;

use App\Models\Clinica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClinicaController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:clinica-list|clinica-create|clinica-edit|clinica-delete', ['only' => ['index','store']]);
         $this->middleware('permission:clinica-create', ['only' => ['create','store']]);
         $this->middleware('permission:clinica-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:clinica-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['clinicas']=Clinica::paginate(10);
        return view('clinicas.index',$datos);

        //$clinicas = Clinica::paginate(10); // Paginate the results with 10 items per page
        //return view('clinicas.index', ['clinicas' => $clinicas]);


    }

    /**
     * Show the form for creating a new resource.
     */
    /*public function create()
    {
        //
        return view('clinicas.create');
    }*/

    public function create(){
        $clinica = new Clinica(); // Crear una nueva instancia de Clinica
        return view('clinicas.create', compact('clinica'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $campos =[
            'fechaVista'=>'required|string|max:1000',
            'motivoVista'=>'required|string|max:1000',
            'observaciones'=>'required|string|max:1000',
            'recetaMedica'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            'recetaMedica'=>'La foto es requerida'

        ];

        $this->validate($request, $campos, $mensaje);
        //$datosClinica = request()->all();

        $datosClinica = request()->except('_token');

        if($request->hasFile('recetaMedica')){
            $datosClinica['recetaMedica']=$request->file('recetaMedica')->store('uploads', 'public');
        }

        Clinica::insert($datosClinica);
        //return response()->json($datosClinica);
        return redirect('clinicas')->with('mensaje','Agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinica $clinica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clinica = Clinica::findOrFail($id);
        return view('clinicas.edit', compact('clinica'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos =[
            'fechaVista'=>'required|string|max:1000',
            'motivoVista'=>'required|string|max:1000',
            'observaciones'=>'required|string|max:1000',
            'recetaMedica'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            'recetaMedica'=>'La foto es requerida'
        ];
        
        if($request->hasFile('recetaMedica')){
            $campos=['recetaMedica'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['recetaMedica'=>'La foto es requerida' ];
            
        }

        $this->validate($request, $campos, $mensaje);
        //
        $datosClinica = request()->except(['_token', '_method']);
        if($request->hasFile('recetaMedica')){
            $clinica = Clinica::findOrFail($id);
            Storage::delete('public/'.$clinica->recetaMedica);
            $datosClinica['recetaMedica']=$request->file('recetaMedica')->store('uploads', 'public');
        }


        Clinica::where('id', '=', $id)->update($datosClinica);
        $clinica = Clinica::findOrFail($id);
        //return view('clinicas.edit', compact('clinica'));
        return redirect('clinicas')->with('mensaje','Registro modificado');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $clinica = Clinica::findOrFail($id);
        if(Storage::delete('public/'.$clinica->recetaMedica)){
            Clinica::destroy($id);
        }
        return redirect('clinicas')->with('mensaje','Registro borrado');
    }
}
