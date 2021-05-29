<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['product_name',
        'product_code',
        'product_images',
        'product_price',
        'brand_id',
        'category_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
