<?php

namespace App\Models;

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


  public function movie() {
      return $this->belongsTo(Movie::class, 'movieId');
  }

  public function cinemaHall() {
      return $this->belongsTo(CinemaHall::class, 'cinemaHallId');
  }

}