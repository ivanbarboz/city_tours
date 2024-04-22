<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "name",
        "description",
        "url"
    ];
    public function tourist_places(){
        return $this->hasMany(TouristPackage::class);
    }
}