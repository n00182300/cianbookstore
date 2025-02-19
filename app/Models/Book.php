<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //publisher that published this book.inverse of 1:M
    public function publisher()
    {
      return $this->belongsTo('App\Models\Publisher');
    }
}
