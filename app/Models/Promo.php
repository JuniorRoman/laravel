<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = ['title', 'rules'];

    protected $casts = [
      'rules' => 'array', // автоматичне перетворення JSON ↔ PHP array
  ];
}
