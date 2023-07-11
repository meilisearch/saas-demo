<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;
use App\Models\Company;

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

        $array['organization_id'] = $this->company->organization->id;

        $array['company_name'] = $this->company->name;
        $array['company_url'] = $this->company->url;

        return $array;
    }

    protected static function booted()
    {
        static::saved(function (Contact $contact) {
            $company_id = $contact->company_id;
            $company = Company::where('id', $company_id)->firstOrFail();
            $company->save();
        });
    }
}
