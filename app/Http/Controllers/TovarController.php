<?php

namespace App\Http\Controllers;

use App\Models\Tovar;
use Illuminate\Http\Request;

class TovarController extends Controller
{
    public function index(){
        $tovars = Tovar::all();
        $liquids = Tovar::where('category', 'Жидкость')->get();
        $pods = Tovar::where('category', 'POD')->get();
        $disposables = Tovar::where('category', 'Одноразовый вейп')->get();
        return view('catalog', ['tovars' => $tovars, 'liquids' => $liquids, 'pods' => $pods, 'disposables' => $disposables]);
    }
    public function show(Request $request){
        $tovars = Tovar::where('id', $request->id)->get();
        return view('cart', ['tovars' => $tovars]);
    }
}
