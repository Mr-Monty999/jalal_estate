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
use Illuminate\Contracts\Auth\CanResetPassword;
use Nicolaslopezj\Searchable\SearchableTrait;

class User extends Authenticatable implements CanResetPassword
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes, Messageable, SearchableTrait;

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

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            "users.name" => 1,
            "users.email" => 1,
            "users.phone" => 1,
            "offices.license_number" => 1,
            "offices.advertiser_number" => 1,
            "offices.commercial_registration_number" => 1,
            "marketers.license_number" => 1,
            "marketers.advertiser_number" => 1,
            "companies.license_number" => 1,
            "companies.advertiser_number" => 1,
            "companies.commercial_registration_number" => 1,

        ],
        'joins' => [
            'offices' => ['users.id', 'offices.user_id'],
            'marketers' => ['users.id', 'marketers.user_id'],
            'companies' => ['users.id', 'companies.user_id'],
            'landlords' => ['users.id', 'landlords.user_id'],
            'service_providers' => ['users.id', 'service_providers.user_id'],



        ],
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

    public function complaints()
    {
        return $this->hasMany(Complaint::class, "user_id");
    }
}
