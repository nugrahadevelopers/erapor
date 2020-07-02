<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded = [];

    public $table = "admin";

    protected $fillable = [
        'user_id', 'name', 'phone', 'address'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
