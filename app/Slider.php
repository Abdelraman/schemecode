<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];

    protected $appends = ['title_without_last_word', 'last_word', 'image_path'];

    public function getTitleWithoutLastWordAttribute()
    {
        $title_without_last_word = preg_replace('/\W\w+\s*(\W*)$/', '$1', $this->title);
        return $title_without_last_word;

    }//end of get title

    public function getLastWordAttribute()
    {
        $title_array = explode(' ', $this->title);
        return array_pop($title_array);

    }//end of get last word

    public function getImagePathAttribute()
    {
        return asset('uploads/' . $this->image);

    }//end of get image path attribute

}//end of model
