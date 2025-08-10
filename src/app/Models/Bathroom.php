<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Bathroom extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'bathrooms';

    protected $fillable = [
        'name', 'latitude', 'longitude', 'rating', 'comments'
    ];
}
