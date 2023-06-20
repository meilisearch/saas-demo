<?php

namespace App\Models;

use DateTime;
use Laravel\Scout\EngineManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Facades\Log;

class Organization extends Model
{
    use HasFactory;

    static function findById(int $id): Organization
    {
        return Organization::where('id', $id)->firstOrFail();
    }

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    public function contacts(): HasManyThrough
    {
        return $this->hasManyThrough(Contact::class, Company::class);
    }

    public function deals(): HasMany
    {
        return $this->hasMany(Deal::class);
    }

    protected static function booted()
    {
        static::creating(function (Organization $organization) {
            $meiliApiKeyUid = env('MEILISEARCH_KEY_UID');
            $meiliApiKey = env('MEILISEARCH_KEY');

            $meilisearch = resolve(EngineManager::class)->engine();

            $organization->meilisearch_token = $meilisearch->generateTenantToken(
                $meiliApiKeyUid,
                $organization->getSearchRules(),
                [
                    'apiKey' => $meiliApiKey,
                    'expiresAt' => new DateTime('2030-12-31'),
                ]
            );
        });
    }

    public function getSearchRules(): object
    {
        return (object) [
            '*' => (object) [
                'filter' => "organization_id = $this->id",
            ]
        ];
    }
}
