<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('superheros.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('superheros.index')->with('success', 'Compte créé avec succès !');
    }

    public function showLoginForm()
    {
        return view('superheros.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('superheros.index')->with('success', 'Connexion réussie !');
        }

        return back()->withErrors(['email' => 'Identifiants incorrects']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Déconnexion réussie.');
    }
}
