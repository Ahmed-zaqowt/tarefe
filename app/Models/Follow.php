<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $guarded = [] ;
    use HasFactory;

    function company() {
      return $this->hasMany(Company::class ) ; 
    }
}
