<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Question\Question;
use App\Model\Level\Level;

class QuizController extends Controller
{
    public function postSubmit(Request $request)
    {
        
        $answers = $request->all();
        $level = Level::find(Question::find($answers[0]['id'])->first()->level)->first();

        $correctionResult = $this->corrector($request->all(), $level->score);

        return response()->json([
            'success' => TRUE,
            'data' => [
                'user' => Auth::user(),
                'data' => $correctionResult,
            ],
        ]);
    }

    protected function corrector($inputAnswer, $score)
    {
        
        $correct = array();
        $wrong = array();

        foreach ($inputAnswer as $answer) {

            $question = Question::find($answer['id']);
            
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
