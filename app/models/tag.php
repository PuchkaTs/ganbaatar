<?php


class Tag extends Eloquent {

    protected $fillable = ['tag'];

    public function projects()
    {
        return $this->belongsToMany('Project');
    }
}