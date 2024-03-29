<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstateClassification extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];


    public function landOffers()
    {
        return $this->hasMany(LandOffer::class, "estate_classification_id");
    }
}
