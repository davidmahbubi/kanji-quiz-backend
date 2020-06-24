<?php

use Illuminate\Database\Seeder;
use App\Model\Question\Question;
use Carbon\Carbon;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $questions = [
            [
                'level_id' => 1,
                'question' => '私',
                'option_a' => 'おまえ',
                'option_b' => 'わたし',
                'option_c' => 'おれ',
                'option_d' => 'あたらし',
                'answer' => 'b',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 1,
                'question' => '何',
                'option_a' => 'たべ',
                'option_b' => 'なるほど',
                'option_c' => 'にほん',
                'option_d' => 'なに',
                'answer' => 'd',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 1,
                'question' => '山',
                'option_a' => 'やま',
                'option_b' => 'かわ',
                'option_c' => 'た',
                'option_d' => 'がっこう',
                'answer' => 'a',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 1,
                'question' => '月',
                'option_a' => 'つき',
                'option_b' => 'にち',
                'option_c' => 'きもち',
                'option_d' => 'やま',
                'answer' => 'a',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 2,
                'question' => '今週',
                'option_a' => 'あした',
                'option_b' => 'こんしゅ',
                'option_c' => 'しぬ',
                'option_d' => 'きょう',
                'answer' => 'b',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 2,
                'question' => '渋谷',
                'option_a' => 'ひろしま',
                'option_b' => 'あおもり',
                'option_c' => 'しぶや',
                'option_d' => 'ふくおか',
                'answer' => 'c',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 3,
                'question' => '川崎',
                'option_a' => 'かわぐち',
                'option_b' => 'かわさき',
                'option_c' => 'きもち',
                'option_d' => 'かんじょ',
                'answer' => 'b',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 3,
                'question' => '時間',
                'option_a' => 'しゅんかん',
                'option_b' => 'たたみ',
                'option_c' => 'せんぱい',
                'option_d' => 'じかん',
                'answer' => 'd',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 4,
                'question' => '警察',
                'option_a' => 'きせつ',
                'option_b' => 'けいさつ',
                'option_c' => 'しぶや',
                'option_d' => 'あんぜん',
                'answer' => 'b',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 4,
                'question' => '安全',
                'option_a' => 'あんぜん',
                'option_b' => 'きせき',
                'option_c' => 'くろい',
                'option_d' => 'しおり',
                'answer' => 'a',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 5,
                'question' => '試験',
                'option_a' => 'しょれい',
                'option_b' => 'かいさ',
                'option_c' => 'しけん',
                'option_d' => 'がっこう',
                'answer' => 'c',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 5,
                'question' => '教室',
                'option_a' => 'あんぜん',
                'option_b' => 'かんぺき',
                'option_c' => 'ふね',
                'option_d' => 'きょうしつ',
                'answer' => 'c',
                'created_at' => Carbon::now(),
            ],
            [
                'level_id' => 5,
                'question' => '季節',
                'option_a' => 'けいさつ',
                'option_b' => 'きせつ',
                'option_c' => 'きもち',
                'option_d' => 'まほう',
                'answer' => 'b',
                'created_at' => Carbon::now(),
            ],
        ];

        Question::insert($questions);
    }
}
