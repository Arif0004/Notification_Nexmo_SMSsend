<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Stringable;

class post extends Model
{
    use HasFactory;
    protected $guarded = [];
    function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    #mutator
    function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
    #accesor
    function getNameAttribute($value)
    {
        return strtolower($value);
    }
}
