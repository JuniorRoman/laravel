<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

class Service extends Model
{
  protected $fillable = ['name', 'category_id', 'subcategory_id'];

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function subcategory() 
  {
    return $this->belongsTo(Subcategory::class);
  }
  
}
