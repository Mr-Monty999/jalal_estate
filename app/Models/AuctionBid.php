<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuctionBid extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];


    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function auction()
    {
        return $this->belongsTo(Auction::class, "auction_id");
    }
}
