<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
    public function cities()
    {
        return $this->belongsToMany(City::class, "company_city");
    }

    public function neighbourhoods()
    {
        return $this->belongsToMany(Neighbourhood::class, "company_neighbourhood");
    }
}
