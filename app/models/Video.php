<?php


class Video extends Eloquent {

    protected $fillable = ['title', 'video', 'pin', 'description'];

    public function shorten($num = 250){

        $string = strip_tags($this->description);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }
}