<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'werkorders_status';
    public $timestamps = false;

    protected $fillable = [
        'status',
        'actief'
    ];
}
