<?php

namespace App\Http\Controllers;

use App\Calificacion;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CalificacionesController extends Controller
{
    function calificacionesView(){
        $calificaciones = Calificacion::paginate(3);
        return view("calificaciones", ["calificaciones"=>$calificaciones]);
    }


    function registrarCalificacion(Request $request) {
        try{
            $calificaciones = new Calificacion();
            $calificaciones->alumno = $request->alumno;
            $calificaciones->materia = $request->materia;
            $calificaciones->calificacion = $request->calificacion;
            $calificaciones->aprobada = $request->aprobada;
            $calificaciones->save();

            return Response::json(["codigo"=>200, "msg"=>"registrado correctamente"]);
        }catch (Exception $e){
            return Response::json(["codigo"=>500, "msg"=>$e->getMessage()]);
        }
    }

    function getCalificaciones(){
        $calificaciones = Calificacion::all();

        return Response::json(["code"=>200, "calificaciones"=>$calificaciones]);
    }
}
