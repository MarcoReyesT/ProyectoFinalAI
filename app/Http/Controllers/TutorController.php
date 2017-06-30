<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tutor;

class TutorController extends Controller
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
        return Tutor::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tutor = Tutor::create($request->all());
        if (!isset($tutor)) { 
            $datos = [
            'errors' => true,
            'msg' => 'Error al crear al tutor',
            ];
            $tutor = \Response::json($datos, 404);
        } 
        return $tutor;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutor = Tutor::find($id);
        if (!isset($tutor)) {
            $datos = [
            'errors' => true,
            'msg' => 'No se encontró al tutor con ID = ' . $id,
            ];
            $tutor = \Response::json($datos, 404);
        }
        return $tutor;
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
        $tutor = Tutor::find($id);
        $tutor->fill($request->all());
        $tutorRetorno = $tutor->save();
        if (isset($tutor)) {
            $tutor = \Response::json($tutorRetorno, 200);
        } else {
           $tutor = \Response::json(['error' => 'No se ha podido actualizar al tutor'], 404);
        }
        return $tutor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = Tutor::find($id);
        if ($tutor->delete()) {
            $tutor = \Response::json(['delete' => true, 'id' => $id], 200);
        } else {
           $tutor = \Response::json(['error' => 'No se ha podido eliminar al tutor'], 403);
        }
        return $tutor;
    }
}
