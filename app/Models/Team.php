<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status',
        'name',
        'href',
        'designation',
        'photo',
        'email',
        'phone',
        'linkedin',
        'twitter',
        'facebook',
        'instagram',
        'bio',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($member) {
            // Generate random unique href if not given
            if (empty($member->href)) {
                $member->href = Str::random(10);
            }
        });
    }
}
