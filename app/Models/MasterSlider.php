<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterSlider extends Model
{
  protected $table = 'masters_slider';
  protected $fillable = [
    'name',
    'image',
    'specialty',
  ];
}
