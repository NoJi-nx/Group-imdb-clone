<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = ['firstName', 'lastName', 'photo'];


    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

    public function getFullNameAttribute()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}


?>