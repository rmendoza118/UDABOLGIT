<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    //es la operacion cada fgrupo dbe crear su funcion como tarea
    public function operacion(Request $request)
    {
       

        if (isset($result['errors'])) {
            return response()->json($result, 422);
        } else {
            return response()->json($result);
        }
    }
}
