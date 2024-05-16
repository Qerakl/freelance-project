<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use App\Models\Tovar;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function add_basket(Request $request)
    {
        $user_id = Auth::user()->id;
        $tovar_id = $request->id;
        $basket = Basket::where('user_id', $user_id)->where('tovar_id', $tovar_id)->get();
        if ($basket->isEmpty()) {
            $tovars = Tovar::where('id', $tovar_id)->get();
            foreach ($tovars as $tovar) {
                $img = $tovar->img;
                Basket::create([
                    'user_id' => $user_id,
                    'tovar_id' => $tovar_id,
                    'tovar_name' => $tovar->name,
                    'tovar_count' => 1,
                    'tovar_price' => $tovar->price,
                    'tovar_img' => $img,
                ]);
            }
            return redirect('basket');
        }

        return redirect('basket');

    }
    public function basket()
    {
        $user_id = session('user.id');
        $tovars = Basket::where('user_id', $user_id)->get();
        $tovarsInTovars = [];
        $sum = 0;
        foreach ($tovars as $key => $tovar) {
            $tovars_count = Tovar::where('id', $tovar->tovar_id)->get();
            $sum += $tovar->tovar_count * $tovar->tovar_price;
            foreach ($tovars_count as $row) {
                $tovarsInTovars[$key] = $row->count;
            }
        }
        return view('basket', ['tovars' => $tovars, 'sum' => $sum, 'tovarMax' => $tovarsInTovars]);
    }
    public function up_count_basket(Request $request)
    {
        $user = session('user.id');
        $basket = Basket::where('user_id', $user)->get();
        foreach ($basket as $key => $row) {
            $count = $request->input('count' . $key);
            Basket::where('user_id', $user)->where('tovar_id', $row->tovar_id)
                ->update([
                    'tovar_count' => $count
                ]);
        }
        return redirect('basket');

    }
    public function del_basket(Request $request)
    {
        $user = session('user.id');
        $basket = Basket::where('user_id', $user)->where('tovar_id', $request->id)->delete();
        return redirect('basket');

    }
}
