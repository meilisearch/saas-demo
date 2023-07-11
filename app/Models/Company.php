<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory, Searchable;

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

    public function deals(): HasMany
    {
        return $this->hasMany(Deal::class);
    }

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    // only transforms 'www.domain.com' to 'domain.com'
    public function getEmailDomain(): string
    {
        $parsedUrl = parse_url($this->url);
        return str_ireplace('www.', '', $parsedUrl['path']);
    }

    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        $array['number_of_contacts'] = $this->contacts->count();

        return $array;
    }
}
