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

    foreach ($baskets as $basket) {
        // Находим заказ по user_id и tovar_id
        $order = Order::where('user_id', $user_id)
            ->where('tovar_id', $basket->tovar_id)
            ->first();
            if($order == null){
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
            }
            // Суммируем количество товара
            elseif($order->status === 'Заказ готов к выдаче'){
                $order->tovar_count += $basket->tovar_count;
            $order->save();
            }else { // Если заказа нет
            // Создаем новый заказ
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
        }

        // Обновляем количество товара на складе
        $tovar = Tovar::find($basket->tovar_id);
        if ($tovar) {
            $tovar->count -= $basket->tovar_count;
            $tovar->save();
        }

        // Удаляем товар из корзины
        $basket->delete();
    }

    return redirect('profile');
}
}
