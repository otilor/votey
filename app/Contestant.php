<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    /**
    * The attributes that are mass assignable.
    * @var array
    */
    protected $fillable = [
        'poll_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function setUserIdAttribute($userId)
    {
        $this->attributes['user_id'] = $userId[0];
    }

}
