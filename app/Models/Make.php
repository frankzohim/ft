<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\carModel;

class Make extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    /**
    * Get all of the carModels for the Make
    *
    */
    public function CarModel()
    {
            return $this->hasMany(CarModel::class);
    }
}
