<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagesContent extends Model
{
    use HasFactory;

    protected $table = 'pages_content';

    protected $fillable = [
        'stories_heading',
        'stories_desc',
        'team_tag',
        'team_heading',
        'team_desc',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
