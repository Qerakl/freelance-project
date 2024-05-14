<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //регистрация аккаунта
    public function register(Request $request){
        if(Auth::check()){
            return redirect('/');
        }
        $valid = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email',
            'date' => 'required|date',
            'password' => 'required|max:255|min:6|confirmed',
            'password_confirmation' => 'required|max:255|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
            'password' => Hash::make($request->password),
        ]);
        
        Auth::login($user);
        if ($user) {
            $user = User::where('email', $request->email)->get();
            foreach($user as $row){
                $request->session()->push('user.id', $row->id);
                $request->session()->push('user.name', $row->name);
            }
            $token = $request->user()->createToken('mytoken')->plainTextToken;
            
            return redirect('profile');
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }

    }
    //вход в аккаунт
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect('/');
        }
        $validated = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt($validated)) {
            $user = User::where('email', $request->email)->get();
            if (Auth::user()->role === 'admin') {
                // Аутентификация успешна для администратора
                foreach($user as $row){
                    session(['user.id' => $row->id]);
                    session(['user.name' => $row->name]);
                    session(['user.role' => $row->role]);
                }
                return redirect()->intended('/');
            }
            foreach($user as $row){
                session(['user.id' => $row->id]);
                session(['user.name' => $row->name]);
                session(['user.role' => $row->role]);
            }
            $token = $request->user()->createToken('mytoken')->plainTextToken;
            return redirect('/');
        }
        return back()->withErrors([
            'login_error' => 'Неверный логин или пароль. Пожалуйста, попробуйте снова.'
        ]);
    }
    public function basket(){
        $user_id = session('user.id');
        return view('basket');
    }
}
