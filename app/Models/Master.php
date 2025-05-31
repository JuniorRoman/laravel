<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
  protected $fillable = ['name', 'image', 'avatar', 'specialty', 'workStart', 'workEnd'];
  
  public function services()
  {
    return $this->belongsToMany(Service::class);
  }

  
}
