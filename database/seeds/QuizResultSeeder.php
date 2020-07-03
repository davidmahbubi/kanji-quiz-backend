<?php

use Illuminate\Database\Seeder;
use App\Model\Quiz\QuizResult;
use Carbon\Carbon;

class QuizResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuizResult::create([
            'user_id' => 1,
            'level_id' => 1,
            'level_name' => 'JLPT N5',
            'level_score' => 5,
            'level_limit' => 10,
            'correct_answer' => 4,
            'wrong_answer' => 6,
            'score' => 20,
            'created_at' => Carbon::now(),
        ]);
    }
}
