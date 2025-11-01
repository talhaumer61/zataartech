<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomePage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status',

        'services_tag', 'services_heading', 'services_desc',

        'section1_tag', 'section1_heading', 'section1_desc',
        'section1_btn_text', 'section1_url',
        'section1_image1', 'section1_image2',

        'section2_tag', 'section2_heading', 'section2_desc',
        'section2_btn_text', 'section2_url',
        'section2_image1', 'section2_image2',

        'success_stories_tag', 'success_stories_heading', 'success_stories_desc',
        'reviews_tag', 'reviews_heading', 'reviews_desc',
        'footer_text'
    ];
}
