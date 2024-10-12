<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkNumber extends Controller
{
    public function show(Request $request, $id): JsonResponse{
       
        return response()->json([
            'car' => collect($cars)->firstWhere('id', $id)
        ]);
    }
}
