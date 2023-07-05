<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class Provincias extends Controller
{
    public function provincias(Request $request){
        if(isset($request->texto)){
            $provincias = Province::where('city_id',$request->texto)->get();
            return response()->json([
                'lista' => $provincias,
                'success' => true
            ]);
        }else{
            return response()->json([
                'success' => false
            ]);
        }
    }
}
