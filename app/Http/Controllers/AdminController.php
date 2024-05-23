<?php

namespace App\Http\Controllers;

use App\Models\Tovar;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $user_id = session('user.id');
            $users = User::where('id', $user_id)->get();
            $orders = Order::all();
            return view('admin.profile', ['users' => $users, 'orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addTovar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'count' => 'required',
            'price' => 'required',
            'description' => 'required',
            'img' => 'required',

        ]);
        //добавление в бд
        $image = $request->file('img')->store('public');
        $image = $request->img->hashName();
        $user = Tovar::create([
            'name' => $request->name,
            'category' => $request->category,
            'count' => $request->count,
            'price' => $request->price,
            'description' => $request->description,
            'img' => $image
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tovars = Tovar::where('id', $id)->get();
        return view('admin.edit', ['tovars' => $tovars]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tovars = Tovar::where('id', $id)->get();
        if(!empty($request->img)){

            $image = $request->file('img')->store('public');
            $image = $request->img->hashName();
            Tovar::where('id', $id)->update([
                'name' => $request->name,
                'category' => $request->category,
                'count' => $request->count,
                'price' => $request->price,
                'description' => $request->description,
                'img' => $image
            ]);
            foreach($tovars as $tovar){
                Storage::delete('public/'.$tovar->image); //удаление файла фото статьи после успешного обновления
            }
            foreach($tovars as $tovar){
                return redirect('/');
            }
        }
        Tovar::where('id', $id)->update([
            'name' => $request->name,
                'category' => $request->category,
                'count' => $request->count,
                'price' => $request->price,
                'description' => $request->description,
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tovars = Tovar::where('id', $id)->get();
        foreach($tovars as $tovar){
            Storage::delete('public/'.$tovar->image); //удаление файла фото статьи
        }
        Tovar::where('id', $id)->delete();
        return redirect('/');
    }
    public function del_order(Request $request)
    {
        $user_id = $request->user_id;
        $tovar_id = $request->tovar_id;
        $orders = Order::where('user_id', $user_id)->where('tovar_id', $tovar_id)->get();
        foreach($orders as $order){
            $tovars =Tovar::where('id', $order->tovar_id)->get();
            foreach($tovars as $tovar){
                Tovar::where('id', $order->tovar_id)->update([
                    'count' => $tovar->count + $order->tovar_count
                ]);
            }
        }
        Order::where('user_id', $user_id)->where('tovar_id', $tovar_id)->update([
            'status' => 'Отменен'
        ]);
        return redirect('/');
    }
    public function issued_order(Request $request)
    {
        $user_id = $request->user_id;
        $tovar_id = $request->tovar_id;
        $orders = Order::where('user_id', $user_id)->where('tovar_id', $tovar_id)->update([
            'status' => 'Выдан'
        ]);
        return redirect('/');
    }
}
