<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $guarded = [];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/' . $this->image);

    }//end of get image path

}//end of model
