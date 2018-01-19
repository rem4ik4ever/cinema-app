<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CinemaHall extends Model {
  
  protected $table = "cinema_halls";

  protected $fillable = [
    'name',
    'status',
    'type',
    'numberOfSeats'
  ];

  protected $hidden = [];

  public $timestamps = false;
}