<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandOffer extends Model
{

    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function city()
    {
        return $this->belongsTo(City::class, "city_id");
    }

    public function neighbourhood()
    {
        return $this->belongsTo(Neighbourhood::class, "neighbourhood_id");
    }

    public function landTypes()
    {
        return $this->belongsToMany(LandType::class, "offer_type", "offer_id", "type_id");
    }
}
