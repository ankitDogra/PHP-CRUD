<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'post',
    ];

    // Additional attributes not fillable but used to store name and registration_no
    protected $name;
    protected $registration_no;

    // Accessor methods to get name and registration_no
    public function getNameAttribute()
    {
        return $this->name;
    }

    public function getRegistrationNoAttribute()
    {
        return $this->registration_no;
    }
}

