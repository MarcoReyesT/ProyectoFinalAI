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
}
