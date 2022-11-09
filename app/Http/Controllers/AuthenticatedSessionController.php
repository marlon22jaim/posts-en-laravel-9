<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {

        $credentials = $request->validate([

            "email" => ["required", "string", "email"],
            "password" => ["required", "string"],
        ]);

        $remember = ($request->boolean("remember"));

        //intentamos autenticar
        if (!Auth::attempt($credentials, $remember)) {
            throw ValidationException::withMessages([
                "email" => __("auth.failed"),
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended()->with("status", "Has iniciado Sesión");
    }


    public function destroy(Request $request)
    {
        Auth::guard("web")->logout();

        $request->session()->invalidate();


        $request->session()->regenerateToken();

        return to_route("login")->with("status", "Has cerrado sesión");
    }
}
