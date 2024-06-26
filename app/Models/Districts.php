<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;

    public function city()
    {
        return $this->hasMany(Cities::class);
    }
    public function province()
    {
        return $this->belongsTo(Provinces::class);
    }

}
