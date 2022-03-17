<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Werkorder extends Model
{
    protected $table = 'werkorders';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'omschrijving',
        'plandatum',
        'plantijd',
        'status_id',
        'locatie_id'
    ];

    public static function create(array $array)
    {

    }
}
