<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {
  protected $fillable = [
    'name',
    'paid',
    'seatId',
    'seanceId'
  ];

  protected $table = 'reservations';


  public function seat(){
      return $this->belongsTo(Seat::class, 'seatId');
  }

  public function seance() {
      return $this->belongsTo(Seance::class, 'seanceId');
  }
}