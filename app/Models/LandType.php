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
        return $this->belongsToMany(LandOffer::class, "offer_type", "type_id", "offer_id");
    }
}
