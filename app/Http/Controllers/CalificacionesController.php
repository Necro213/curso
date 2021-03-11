<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    function calificacionesView(){
        return view("calificaciones");
    }
}
