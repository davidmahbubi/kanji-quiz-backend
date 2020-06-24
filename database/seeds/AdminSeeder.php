<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'David Mahbubi',
            'picture' => 'default.png',
            'username' => 'davidmhb',
            'password' => Hash::make(123),
        ]);
    }
}
