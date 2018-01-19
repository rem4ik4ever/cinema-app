<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model {
  
  protected $fillable = [
    'number',
    'row'
  ];

  protected $table = "seats";

}