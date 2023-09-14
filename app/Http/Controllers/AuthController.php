<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    



    public function showRegisterForm()
    {
        return view('admin.register');
    }
    
    public function register(Request $request)
    {
        // Validar datos
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // Crear usuario
        $user = new User($data);
        $user->password = Hash::make($data['password']);
        $user->save();
    
        // Loguear y redirigir al inicio
        Auth::login($user);
        return redirect('/');
    }
    
    public function showLoginForm()
    {
        return view('admin.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return back()->withErrors([
                'email' => 'Las credenciales no coinciden con nuestros registros.',
            ]);
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    





}
