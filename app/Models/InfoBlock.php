<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\infoBlockBack;

class InfoBlock extends Model
{
    protected $fillable = ['title', 'desc', 'icon'];

    public function back()
      {
         return $this->hasOne(InfoBlockBack::class);
      }

}
