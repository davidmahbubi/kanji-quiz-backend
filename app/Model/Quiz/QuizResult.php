<?php

namespace App\Model\Quiz;

use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    
    protected $fillable = ['user_id', 'level_id', 'level_name', 'level_score', 'level_limit', 'correct_answer', 'wrong_answer', 'score'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
