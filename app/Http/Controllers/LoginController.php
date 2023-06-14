<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request): RedirectResponse
    {
        $email = $request->input('email');
        $user = User::findByEmail($email);

        if ($user) {
            Auth::login($user);
            return redirect()->action([HomeController::class]);
        }

        return redirect('/')->with('error', 'Invalid credentials');
    }
}
