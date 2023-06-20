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
}
