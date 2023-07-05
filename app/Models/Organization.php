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
        static::retrieved(function (Organization $organization) {
            // This will be true when running tests
            if (env('SCOUT_DRIVER') === 'array' && env('APP_ENV') === 'testing') {
                $organization->meilisearch_token = 'fake-tenant-token';
                return;
            }

            if ($organization->meilisearch_token) {
                Log::debug('Organization ' . $organization->id . ': already has a token');
                return;
            }
            Log::debug('Generating tenant token for organization ID: ' . $organization->id);

            $searchRules = (object) [
                '*' => (object) [
                    'filter' => 'organization_id = ' . $organization->id,
                ]
            ];

            $meiliApiKey = env('MEILISEARCH_KEY');
            $meiliApiKeyUid = env('MEILISEARCH_KEY_UID');

            Log::debug("Using MeiliSearch API key: {$meiliApiKey}");
            Log::debug("Using MeiliSearch API key UID: {$meiliApiKeyUid}");

            $token = self::generateMeiliTenantToken($meiliApiKeyUid, $searchRules, $meiliApiKey);
            Log::notice('Organization ' . $organization->id . ': saved token ' . $token);

            $organization->meilisearch_token = $token;
            $organization->save();
        });
    }

    protected static function generateMeiliTenantToken($meiliApiKeyUid, $searchRules, $meiliApiKey)
    {
        $meilisearch = resolve(EngineManager::class)->engine();

        return $meilisearch->generateTenantToken(
            $meiliApiKeyUid,
            $searchRules,
            [
                'apiKey' => $meiliApiKey,
                'expiresAt' => new DateTime('2030-12-31'),
            ]
        );
    }
}
