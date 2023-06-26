<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Deal extends Model
{
    use HasFactory, Searchable;

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }

    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        $array['company_name'] = $this->company->name;
        $array['company_url'] = $this->company->url;
        $array['contact_name'] = $this->contact->name;
        $array['contact_email'] = $this->contact->email;

        return $array;
    }
}
