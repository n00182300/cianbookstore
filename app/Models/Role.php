<?php
# @Date:   2020-11-07T16:07:43+00:00
# @Last modified time: 2020-11-07T17:29:09+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users(){
      return $this->belongsToMany('App\Models\User','user_role');
    }
}
