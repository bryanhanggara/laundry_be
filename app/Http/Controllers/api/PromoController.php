<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    public function readAll()
    {
        $promos = Promo::with('shop')->get();

        return response()->json([
            'data' => $promos
        ], 200);
    }

    function readLimitPromo()
    {
        $promos = Promo::orderBy('created_at', 'desc')
            ->limit(3)
            ->with('shop')
            ->get();

        if(count($promos) > 0)
        {   
            return response()->json([
                'data' => $promos
            ], 200);
        } else 
        {
            return response()->json([
                'message' => 'not found',
                'data' => $promos
            ], 400);
        }
    }

    
}
