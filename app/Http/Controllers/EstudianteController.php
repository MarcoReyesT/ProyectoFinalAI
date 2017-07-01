<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estudiante;

class EstudianteController extends Controller
{
    // Constructor
    public function __construct()
    {   
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Estudiante::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = Estudiante::create($request->all());
        if (!isset($estudiante)) { 
            $datos = [
            'errors' => true,
            'msg' => 'Error al crear al estudiante',
            ];
            $estudiante = \Response::json($datos, 404);
        } 
        return $estudiante;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);
        if (!isset($estudiante)) {
            $datos = [
            'errors' => true,
            'msg' => 'No se encontró al estudiante con ID = ' . $id,
            ];
            $estudiante = \Response::json($datos, 404);
        }
        return $estudiante;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->fill($request->all());
        $estudianteRetorno = $estudiante->save();
        if (isset($estudiante)) {
            $estudiante = \Response::json($estudianteRetorno, 200);
        } else {
           $estudiante = \Response::json(['error' => 'No se ha podido actualizar al estudiante'], 404);
        }
        return $estudiante;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        if ($estudiante->delete()) {
            $estudiante = \Response::json(['delete' => true, 'id' => $id], 200);
        } else {
           $estudiante = \Response::json(['error' => 'No se ha podido eliminar al estudiante'], 403);
        }
        return $estudiante;
    }
}
