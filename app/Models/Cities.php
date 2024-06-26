<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

    protected $fillable = [
        "name_en",
        "name_si",
        "name_ta",
        "district_id",
    ];

    public function district()
    {
        return $this->belongsTo(Districts::class);
    }
    public function province()
    {
        return $this->belongsTo(Provinces::class);
    }
}
