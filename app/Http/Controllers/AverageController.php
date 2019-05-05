<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AverageController extends Controller
{
    public function index(Request $request){

        $requestSub = strlen($request->input('array')) - 2; //Verificar tamanho da String e diminuir 2
        $requestString = substr($request->input('array'), 1 , $requestSub); // Limpando a String
        $requestArray = explode(',', $requestString); // Transformando em Array
        
        
        foreach ($requestArray as $key => $value) {
            
            $value = floatval($value);
            $value *= $value;
            $requestArray[$key] = $value;

        }

        $result = sqrt(array_sum($requestArray) / 2);
 
        return json_encode($result);
    }
}
