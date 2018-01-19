<?php

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {
  protected $fillable = [
    'name',
    'paid',
    'seatId',
    'seanceId'
  ];

  protected $table = 'reservations';
  
}