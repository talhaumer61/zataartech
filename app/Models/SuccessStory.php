<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuccessStory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status',
        'title',
        'href',
        'id_service',
        'photo',
        'problem',
        'solution',
        'results',
        'description',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }
}
