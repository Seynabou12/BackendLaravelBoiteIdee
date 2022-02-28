<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function store(Request $request)
    {
        $apprenant = new Apprenant;
        $apprenant->titre = $request->input('titre');
        $apprenant->niveau = $request->input('niveau');
        $apprenant->description = $request->input('description');
        $apprenant->save();

        return response()->json([
            'status'=>200,
            'message'=>'Apprenant Ajouter avec Success',
        ]);

    }
}
