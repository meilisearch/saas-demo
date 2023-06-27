<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Vite;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = null;
        if (Auth::check()) {
            $user = Auth::user();
        } else {
            $user = User::findById(1);
            Auth::login($user);
        }
        return view('deals')->with([
            'deals' => Deal::with(['company', 'contact'])->get(),
            'userName' => $user->name,
            'userAvatarUrl' => $user->avatar_url,
            'userEmail' => $user->email,
            'otherUserEmail' => User::where('email', '!=', $user->email)->first()->email,
            'organizationLogoUrl' => Vite::asset('resources/assets/meilisearch-logo.svg'),
            'organizationName' => $user->organization->name,
            'indexName' => 'deals:company_name:asc',
            'meilisearchToken' => $user->organization->meilisearch_token,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Deal $deal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deal $deal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Deal $deal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deal $deal)
    {
        //
    }
}
