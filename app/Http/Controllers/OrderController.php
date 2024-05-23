<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Tovar;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function add_order(Request $request)
    {
        $user_id = session('user.id');
        $baskets = Basket::where('user_id', $user_id)->get();


        foreach($baskets as $basket){
            if(!empty($orders = Order::where('user_id', $user_id)->where('tovar_id', $basket->tovar_id)->get())){
                foreach($orders as $row){
                    Order::where('user_id', $user_id)->where('tovar_id', $basket->tovar_id)->update([
                        'tovar_count' => $basket->tovar_count + $row->tovar_count
                    ]);
                }
                return redirect('profile');
            }
            $order = Order::create([
                'user_id' => $user_id,
                'user_name' => $basket->user_name,
                'tovar_id' => $basket->tovar_id,
                'tovar_name' => $basket->tovar_name,
                'tovar_count' => $basket->tovar_count,
                'tovar_price' => $basket->tovar_price,
                'tovar_img' => $basket->tovar_img,
                'status' => 'Заказ готов к выдаче'
        ]);
        $tovars = Tovar::where('id', $basket->tovar_id)->get();
        foreach($tovars as $tovar){
            Tovar::where('id', $basket->tovar_id)->update([
                'count' => $tovar->count - $basket->tovar_count
            ]);
        }
        Basket::where('user_id', $user_id)->delete();
        }
        return redirect('profile');
    }
}
