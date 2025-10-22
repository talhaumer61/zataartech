<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'status',
        'client_name',
        'designation',
        'photo',
        'review',
        'id_service',
    ];

    // Relationship: Testimonial may belong to a Service
    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }
}
