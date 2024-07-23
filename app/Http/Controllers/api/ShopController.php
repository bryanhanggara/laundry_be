<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function readAll()
    {
        $shops = Shop::all();

        return response()->json([
            'data' => $shops
        ], 200);
    }

    function recomendationShop()
    {
        $shops = Shop::orderBy('rate', 'desc')
            ->limit(3)
            ->get();

        if(count($shops) > 0 )
        {
            return response()->json([
                'data' => $shops
            ], 200);
        } else 
        {
            return response()->json([
                'message' => 'not found',
                'data' => $shops
            ]);
        }
    }

    function searchByCity($name)
    {
        $shops = Shop::where('city', 'like' , '%' . $name . '%')
            ->orderBy('name')
            ->get(); 

        if(count($shops) > 0 )
        {
            return response()->json([
                'data' => $shops
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found',
                'data' => $shops
            ], 400);
        }

    }
}
