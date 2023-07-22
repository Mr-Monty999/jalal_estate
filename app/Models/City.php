<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function cities()
    {
        return $this->hasMany(City::class, "parent_id");
    }
    public function parentCity()
    {
        return $this->belongsTo(City::class, "parent_id");
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class, "company_city");
    }
    public function marketers()
    {
        return $this->belongsToMany(Marketer::class, "marketer_city");
    }
    public function offices()
    {
        return $this->belongsToMany(Office::class, "office_city");
    }

    public function neighbourhoods()
    {
        return $this->hasMany(Neighbourhood::class, "city_id");
    }

    public function landOffers()
    {
        return $this->hasMany(LandOffer::class, "city_id");
    }
}
