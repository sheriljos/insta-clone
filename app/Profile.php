<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'url', 'image', 'user_id'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
