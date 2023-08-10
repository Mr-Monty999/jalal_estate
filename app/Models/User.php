<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Musonza\Chat\Traits\Messageable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes, Messageable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = [
        "id"
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->hasOne(Company::class, "user_id");
    }
    public function marketer()
    {
        return $this->hasOne(Marketer::class, "user_id");
    }
    public function office()
    {
        return $this->hasOne(Office::class, "user_id");
    }
    public function landlord()
    {
        return $this->hasOne(Landlord::class, "user_id");
    }
    public function serviceProvider()
    {
        return $this->hasOne(ServiceProvider::class, "user_id");
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, "user_id");
    }
    public function landOffers()
    {
        return $this->hasMany(LandOffer::class, "user_id");
    }
}
