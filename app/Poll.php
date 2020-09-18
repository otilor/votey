<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'session_title',
    ];

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
