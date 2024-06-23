<?php

namespace App\Http\Controllers;

use App\Models\Tovar;
use Illuminate\Http\Request;

class NewTovarController extends Controller
{
    public function index(){
        $tovars = Tovar::all();
        return view('index', ['tovars' => $tovars, ]);

    }
}
