<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactInfo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status',
        'heading',
        'description',
        'address1',
        'address2',
        'phone1',
        'phone2',
        'email1',
        'email2',
    ];
}
