<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Movie extends Model {

  public $timestamps = true;

  protected $table = 'movies';

  protected $fillable = [
    'name',
    'release_date',
    'age_restriction',
    'description',
    'rating',
    'poster_url'
  ];

  protected $hidden = [];


} 