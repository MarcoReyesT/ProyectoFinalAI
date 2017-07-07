<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tutoria;
use App\Estudiante;
use App\Ramo;
use App\Tutor;

class TutoriaController extends Controller
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





        $tutorias = Tutoria::all();
        $datos = array();
        $tutorDatos = array();
        $cont = 0;

        foreach ($tutorias as $tutoria) {
            $estudiante = Estudiante::find($tutoria->estudiante_id);
            $ramo = Ramo::find($tutoria->ramo_id);
            $tutor = Tutor::find($tutoria->tutor_id);

            $datos[$cont]['id'] = $tutoria->id;
            $datos[$cont]['fecha'] = $tutoria->fecha;
            $datos[$cont]['monto'] = $tutoria->monto;
            $datos[$cont]['tutor'] = $tutor;
            $datos[$cont]['ramo'] = $ramo;
            $datos[$cont]['estudiante'] = $estudiante;

            $cont++;
        }

        return $datos;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tutoria = Tutoria::create($request->all());
        if (!isset($tutoria)) { 
            $datos = [
            'errors' => true,
            'msg' => 'Error al crear al tutoria',
            ];
            $tutoria = \Response::json($datos, 404);
        } 
        return $tutoria;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {




        $tutoria = Tutoria::find($id);
        $datos = array();

        $estudiante = Estudiante::find($tutoria->estudiante_id);
        $ramo = Ramo::find($tutoria->ramo_id);
        $tutor = Tutor::find($tutoria->tutor_id);


        $datos['id'] = $tutoria->id;
        $datos['fecha'] = $tutoria->fecha;
        $datos['monto'] = $tutoria->monto;
        $datos['tutor'] = $tutor;
        $datos['ramo'] = $ramo;
        $datos['estudiante'] = $estudiante;

        return $datos;
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
        $tutoria = Tutoria::find($id);
        $tutoria->fill($request->all());
        $tutoriaRetorno = $tutoria->save();
        if (isset($tutoria)) {
            $tutoria = \Response::json($tutoriaRetorno, 200);
        } else {
           $tutoria = \Response::json(['error' => 'No se ha podido actualizar al tutoria'], 404);
        }
        return $tutoria;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutoria = Tutoria::find($id);
        if ($tutoria->delete()) {
            $tutoria = \Response::json(['delete' => true, 'id' => $id], 200);
        } else {
           $tutoria = \Response::json(['error' => 'No se ha podido eliminar al tutoria'], 403);
        }
        return $tutoria;
    }
}
