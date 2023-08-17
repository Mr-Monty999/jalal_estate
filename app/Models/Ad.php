<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{

    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function cities()
    {
        return $this->belongsToMany(City::class, "ad_city");
    }
}
