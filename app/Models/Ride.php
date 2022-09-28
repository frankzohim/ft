<?php

namespace App\Models;
use App\Models\Path;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;

    protected $guarded = ['_token'];

    /**
     * Get the path that owns the Ride
     *
     */

    public function path()
    {
        return $this->belongsTo(Path::class);
    }
}
