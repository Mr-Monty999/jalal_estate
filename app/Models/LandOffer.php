<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;


class LandOffer extends Model
{

    use HasFactory, SoftDeletes, SearchableTrait;

    protected $guarded = ["id"];

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'land_offers.land_number' => 1,
            'land_offers.street_name' => 1,
            'land_offers.direction' => 1,
            'land_offers.schema_number' => 1,
            'land_offers.instrument_number' => 1,
            'land_offers.price' => 1,
            "land_offers.space" => 1,
            "users.name" => 1,
            "users.email" => 1,
            "users.phone" => 1,
            "neighbourhoods.name" => 1,
            "cities.name" => 1,
            "estate_classifications.name" => 1
        ],
        'joins' => [
            'users' => ['users.id', 'land_offers.user_id'],
            "neighbourhoods" => ["neighbourhoods.id", "land_offers.neighbourhood_id"],
            'cities' => ['cities.id', 'land_offers.city_id'],
            "estate_classifications" => ['estate_classifications.id', 'land_offers.estate_classification_id']


        ],
    ];

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

    public function acceptedBy()
    {
        return $this->belongsTo(User::class, "accepted_by");
    }

    public function estateClassification()
    {
        return $this->belongsTo(EstateClassification::class, "estate_classification_id");
    }
}
