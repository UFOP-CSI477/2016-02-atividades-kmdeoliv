<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{

  protected $fillable = [
      'user_id',
      'produto_id',
      'quantidade',
      'data'
  ];

  protected $guarded=[
        'id'
    ];

 public function produto()
 {
     return $this->belongsTo(Produto::class);
 }
}
