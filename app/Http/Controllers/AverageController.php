<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AverageController extends Controller
{
    public function index(Request $request){

        $offChaves = strlen($request->input('array')) - 2; //Verificar tamanho da String e tirar chaves
        $requestString = substr($request->input('array'), 1 , $offChaves); // Limpando a String
        $requestArray = explode(',', $requestString); // Transformando em Array
        
        
        foreach ($requestArray as $key => $value) {
            
            $value = floatval($value);
            $value = pow($value, 2);
            $requestArray[$key] = $value;

        }

        $result = sqrt(array_sum($requestArray) / count($requestArray));
 
        return json_encode($result);
    }
}
