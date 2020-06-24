<?php

use Illuminate\Database\Seeder;
use App\Model\Level\Level;
use Carbon\Carbon;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::insert([
            [
                'name' => 'JLPT N5',
                'limit' => 10,
                'score' => 5,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'JLPT N4',
                'limit' => 10,
                'score' => 10,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'JLPT N3',
                'limit' => 10,
                'score' => 15,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'JLPT N2',
                'limit' => 10,
                'score' => 20,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'JLPT N1',
                'limit' => 10,
                'score' => 25,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
