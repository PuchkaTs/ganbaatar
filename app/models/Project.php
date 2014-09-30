<?php


class Project extends Eloquent {

    protected $fillable = ['body', 'title', 'tag'];


    public function shorten($num = 250){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }

    public function image(){
        return $this->hasMany('Image');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
}