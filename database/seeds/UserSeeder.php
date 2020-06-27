<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Suzu Aoba',
            'username' => 'suzuaoba',
            'password' => Hash::make(123),
            'picture' => 'default.svg',
            'api_token' => Str::random(64),
            'created_at' => Carbon::now(),
        ]);
    }
}
