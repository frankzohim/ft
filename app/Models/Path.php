<?php

namespace App\Models;
use App\Models\Ride;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    use HasFactory;

    /**
     * Get all of the rides for the Path
     *
     */
    public function rides()
    {
        return $this->hasMany(Ride::class);
    }
}
