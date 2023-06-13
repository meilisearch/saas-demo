<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home')->with([
            'userAvatarUrl' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80',
            'userName' => 'John Doe',
            'userEmail' => 'john.doe@example.com',
            'organizationLogoUrl' => Vite::asset('resources/assets/meilisearch-logo.svg'),
            'organizationName' => 'Meilisearch',
        ]);
    }
}
