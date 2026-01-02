<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'href',
        'photo',
        'icon',
        'overview',
        'sec1_title',
        'sec1_content',
        'sec2_title',
        'sec2_content',
        'description',
        'status',
    ];
}
