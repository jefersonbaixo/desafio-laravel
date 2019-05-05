<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class EquationController extends Controller
{
    public function index(Request $request){

        $request->validate([
            'x'=>'required|numeric',
            'y'=>'required|numeric'
        ]);
    
        $x = $request->x;
        $y = $request->y;
        $z = $x^1/2 + $y*1/3 - 1;

    return $z;

    }
}
