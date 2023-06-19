<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Vite;

class CompanyController extends Controller
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
        return view('companies')->with([
            'companies' => Company::withCount(['contacts'])->get(),
            'userName' => $user->name,
            'userAvatarUrl' => $user->avatar_url,
            'userEmail' => $user->email,
            'otherUserEmail' => User::where('email', '!=', $user->email)->first()->email,
            'organizationLogoUrl' => Vite::asset('resources/assets/meilisearch-logo.svg'),
            'organizationName' => $user->organization->name,
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
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
