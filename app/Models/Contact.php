<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Contact extends Model
{
    use HasFactory, Searchable;

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        $array['company_name'] = $this->company->name;
        $array['company_url'] = $this->company->url;

        return $array;
    }
}
