<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => ["required", "string", "max:255"],
            "email" => ["required", "string", "email", "max:255", "unique:users"],
            "password" => ["required", "confirmed", Rules\Password::defaults()],
        ]);

        $user = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => bcrypt($request->input("password")),
        ]);

        // Auth::login($user);

        return to_route("login")->with("status","Account created");

    }
}
