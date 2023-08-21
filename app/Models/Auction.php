<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auction extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];


    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

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

    public function landType()
    {
        return $this->belongsTo(LandType::class, "land_type_id");
    }


    public function estateClassification()
    {
        return $this->belongsTo(EstateClassification::class, "estate_classification_id");
    }

    public function auctionBids()
    {
        return $this->hasMany(AuctionBid::class, "auction_id");
    }
}
