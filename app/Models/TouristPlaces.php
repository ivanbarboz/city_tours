<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TouristPlaces extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "name",
        "description",
        "url",
        "region_id",
    ];
    public function region(){
        return $this->belongsTo(Region::class);
    }
    public function tourist_package(){
        return $this->hasMany(TouristPackage::class);
    }
}
