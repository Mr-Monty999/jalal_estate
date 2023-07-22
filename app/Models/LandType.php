<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandType extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function landOffers()
    {
        return $this->belongsTo(LandOffer::class, "land_type_id");
    }
}
