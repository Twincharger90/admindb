<?php

namespace App\Http\Controllers;

use App\Models\Receta;//esto cambia 
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //cambia 
        $recetas = Receta::all();
        return view('recetas.index',compact('recetas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recetas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        
        request()->validate([
            'fecha' => 'required',
            'nombre_paciente' => 'required',
            'edad' => 'required',
            'peso' => 'required',
            'temperatura' => 'required',
            'dx' => 'required',
            'medicamentos' => 'required',
            'medico' => 'required',
            'cedula' => 'required'
        ]);
        Receta::create($request->all());
        return redirect()->route('recetas.index')
        ->with('success','receta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        return view('recetas.show',compact('receta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        return view('recetas.edit',compact('receta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        request()->validate([
            'fecha' => 'required',
            'nombre_paciente' => 'required',
            'edad' => 'required',
            'peso' => 'required',
            'temperatura' => 'required',
            'dx' => 'required',
            'medicamentos' => 'required',
            'medico' => 'required',
            'cedula' => 'required'
        ]);
        $receta->update($request->all());
        return redirect()->route('recetas.index')
                        ->with('success','receta updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        $receta->delete();

        return redirect()->route('recetas.index')
                        ->with('success','receta deleted successfully');
    }
}
