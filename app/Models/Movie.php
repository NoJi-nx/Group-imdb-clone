<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    use HasFactory;

    /* Has many */

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    public function directors()
    {
        return $this->belongsToMany(Director::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function genre()
    {
        return $this->belongsToMany(Genre::class);
    }
    public function lists()
    {
        return $this->belongsToMany(UserList::class);
    }
}
