<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rent extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
        // return Image::where('imageable_id', $this->id)->where('imageable_type', Rent::class)->get();
    }
}
