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

    public function getImage()
    {
        $imagePath = "/uploads/cJeZVbQ2aqXh4lTM7kVM9TZlZls0SoUuyXHIAbKP.png";
        
        if ($this->image) {
            $imagePath = $this->image;
        }

        return sprintf("/storage/%s", $imagePath);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
