<?php


class Gtweet extends Eloquent{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gtweets';
    protected $fillable = ['status', 'title'];

}
