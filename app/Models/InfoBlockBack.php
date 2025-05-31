<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\InfoBlock;

class InfoBlockBack extends Model
{
    protected $fillable = [
      'title',
      'subtitle',
      'rulles',
    ];
    protected $casts = [
      'benefits' => 'array',
  ];

    public function info()
{
    return $this->belongsTo(InfoBlock::class);
}
}
