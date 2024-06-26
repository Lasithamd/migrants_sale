<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'description',
        'price',
        'city_id',
        'category_id',
        'sub_category_id',
        'user_id', 
         'slug',
        'feature1',
        'feature2',
        'feature3',
        'feature4',
        'feature5',
        'feature6',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}

