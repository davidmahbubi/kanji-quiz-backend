<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Question\Question;
use App\Model\Level\Level;
use App\Model\Quiz\QuizResult;

class QuizController extends Controller
{
    public function postSubmit(Request $request)
    {
        
        $user = Auth::user();
        $answers = $request->all();
        $level = Level::find(Question::find($answers[0]['id'])->level_id);

        $correctionResult = $this->corrector($request->all(), $level->score);
 
        QuizResult::create([
            'user_id' => $user->id,
            'level_id' => $level->id,
            'level_name' => $level->name,
            'level_score' => $level->score,
            'level_limit' => $level->limit,
            'correct_answer' => count($correctionResult['correct']),
            'wrong_answer' => count($correctionResult['wrong']),
            'score' => $correctionResult['score'],
        ]);

        return response()->json([
            'success' => TRUE,
            'data' => [
                'user' => $user,
                'data' => $correctionResult,
            ],
        ]);
    }

    protected function corrector($inputAnswer, $score)
    {

        $correct = array();
        $wrong = array();

        foreach ($inputAnswer as $answer) {

            $question = Question::find($answer['id'])->makeVisible('answer');
            
            if ($answer['answer'] === $question->answer) {
                $correct[] = $question; 
            } else {
                $wrong[] = $question;
            }

        }

        return [
            'correct' => $correct,
            'wrong' => $wrong,
            'score' => $score * count($correct),
        ];

    }
}
