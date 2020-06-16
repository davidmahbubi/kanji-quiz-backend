<?php

namespace App\Model\Question;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['level_id', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'answer'];
    protected $hidden = ['answer'];

    /**
     * Relation with level table (Many to one)
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level()
    {
        return $this->belongsTo('App\Model\Level\Level');
    }
}
