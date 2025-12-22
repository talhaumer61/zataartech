<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TermsCondition extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'status',
        'href',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
