<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = [
        'nip',
        'name',
        'phone',
        'address'
    ];
}
