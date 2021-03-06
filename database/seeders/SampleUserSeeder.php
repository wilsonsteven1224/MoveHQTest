<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class SampleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Steven',
            'email' => 'steven@test.com',
            'password' => bcrypt('111'),
        ]);
    }
}
