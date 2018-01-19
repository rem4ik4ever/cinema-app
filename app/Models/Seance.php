<?php

use Illuminate\Database\Eloquent\Model;


class Seance extends Model {
  
  public $timestamps = true;

  protected $table = 'seances';

  protected $fillable = [
    'movieId',
    'datetime',
    'cinemaHallId',
    'status'
  ];

  protected $hidden = [];

}