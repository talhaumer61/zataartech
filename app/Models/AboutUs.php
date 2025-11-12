<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutUs extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'about_us';

    protected $fillable = [
        'status',
        'about_us',
        'mission_tag',
        'mission_heading',
        'mission',
        'heading',
        'vision_tag',
        'vision_heading',
        'vision',
        'detail',
        'ceo_photo',
        'ceo_message',
    ];
}
