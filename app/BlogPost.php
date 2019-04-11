<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $guarded = [];
    protected $appends = ['image_path', 'short_body'];

    public function getImagePathAttribute()
    {
        return asset('/uploads/' . $this->image);

    }//end of get image path

    public function getShortBodyAttribute()
    {
        return str_limit($this->body, 70);

    }//end of get short body

}//end of model
