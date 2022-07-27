<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Make;

class CarModel extends Model
{
    use HasFactory;

    /**
     * Get the make that owns the CarModel
     *
     */
    public function make()
    {
        return $this->belongsTo(Make::class);
    }
}
