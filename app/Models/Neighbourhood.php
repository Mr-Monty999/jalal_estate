<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Neighbourhood extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function city()
    {
        return $this->belongsTo(City::class, "city_id");
    }
    public function landOffers()
    {
        return $this->hasMany(LandOffer::class, "neighbourhood_id");
    }
    public function offices()
    {
        return $this->belongsToMany(Office::class, "office_neighbourhood");
    }
    public function companies()
    {
        return $this->belongsToMany(Company::class, "company_neighbourhood");
    }
    public function marketers()
    {
        return $this->belongsToMany(Marketer::class, "marketer_neighbourhood");
    }
}
