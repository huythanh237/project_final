<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'code'
    ];

    public function products(){
        $this->belongsToMany(Product::class);
    }
}
