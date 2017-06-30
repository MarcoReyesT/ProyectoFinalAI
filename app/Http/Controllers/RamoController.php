<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ramo;

class RamoController extends Controller
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
        return Ramo::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ramo = Ramo::create($request->all());
        if (!isset($ramo)) { 
            $datos = [
            'errors' => true,
            'msg' => 'Error al crear el ramo',
            ];
            $ramo = \Response::json($datos, 404);
        } 
        return $ramo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ramo = Ramo::find($id);
        if (!isset($ramo)) {
            $datos = [
            'errors' => true,
            'msg' => 'No se encontró el ramo con ID = ' . $id,
            ];
            $ramo = \Response::json($datos, 404);
        }
        return $ramo;
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
        $ramo = Ramo::find($id);
        $ramo->fill($request->all());
        $ramoRetorno = $ramo->save();
        if (isset($ramo)) {
            $ramo = \Response::json($ramoRetorno, 200);
        } else {
           $ramo = \Response::json(['error' => 'No se ha podido actualizar el ramo'], 404);
        }
        return $ramo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ramo = Ramo::find($id);
        if ($ramo->delete()) {
            $ramo = \Response::json(['delete' => true, 'id' => $id], 200);
        } else {
           $ramo = \Response::json(['error' => 'No se ha podido eliminar el ramo'], 403);
        }
        return $ramo;
    }
}
