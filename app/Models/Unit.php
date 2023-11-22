<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'path',
        'type',
        'size',
        'services',
        'features',
        'price',
        'status',
    ];
}
