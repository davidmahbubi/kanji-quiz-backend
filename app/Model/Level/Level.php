<?php

namespace App\Model\Level;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['name', 'limit', 'score'];
}
