<?php

namespace App\Model\Level;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{

    protected $fillable = ['name', 'limit', 'score'];

    /**
     * Relation with question table (One to many)
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function question()
    {
        return $this->hasMany('App\Model\Question\Question');
    }
}
