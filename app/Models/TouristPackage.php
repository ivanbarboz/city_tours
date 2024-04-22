<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TouristPackage extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "name",
        "description",
        "duration",
        "price",
        "place_id"
    ];

    public function tourist_places(){
        return $this->belongsTo(TouristPackage::class);
    }
}
