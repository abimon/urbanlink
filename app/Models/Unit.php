<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\Utils\Json;
use stdClass;

class unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'category',
        'location',
        'path',
        'type',
        'size',
        'services',
        'features',
        'price',
        'status',
        'featured',
        'created_by'
    ];
    public function user(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    
}
