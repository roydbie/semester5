<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locatie extends Model
{
    protected $table = 'werkorders_locatie';
    public $timestamps = false;

    protected $fillable = [
        'status',
        'actief'
    ];
}
