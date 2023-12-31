<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'registration_no',
        'role' 
    ];

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
