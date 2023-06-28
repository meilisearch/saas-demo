<?php
 
namespace App\View\Composers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Vite;
use Illuminate\View\View;
 
class AuthComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct() {}
 
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $user = Auth::user();
        $view->with([
            'userName' => $user->name,
            'userAvatarUrl' => $user->avatar_url,
            'userEmail' => $user->email,
            'otherUserEmail' => User::where('email', '!=', $user->email)->first()->email,
            'organizationLogoUrl' => Vite::asset('resources/assets/meilisearch-logo.svg'),
            'organizationName' => $user->organization->name,
            'meilisearchToken' => $user->organization->meilisearch_token,
        ]);
    }
}
        