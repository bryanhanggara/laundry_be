<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function readAll()
    {
        $orders = Order::with('shop','user')->get();

        return response()->json([
            'data' => $orders
        ], 200);
    }

    function whereUserId($id)
    {
        $orders = Order::where('user_id', '=', $id)
            ->with('shop','user')
            ->orderBy('created_at','desc')
            ->get();

            if(count($orders) > 0)
            {   
                return response()->json([
                    'data' => $orders
                ], 200);
            } else 
            {
                return response()->json([
                    'message' => 'not found',
                    'data' => $orders
                ], 400);
            }
    }

    function claimOrder(Request $request)
    {
        $order = Order::where([
            ['id', '=', $request->id],
            ['claim_code', '=', $request->claim_code],
        ])->first();
        
        if($order->user_id != 0)
        {
            return response()->json([
                'message' => 'laundri has been claim',
        ], 400);
        }

        $order->user_id = $request->user_id;
        $update =	$order->save();
        
        if($update){
                return response()->json([
                    'data' => $update
            ],200);
        } else {
            return response()->json([
                'message' => 'can not be update',
                'data'=>$update
        ], 500);
        }
    }
}
