<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Emily',
            'email' => 'emily@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('1234'),
            'is_permission' => 1
        ]);

        User::create([
            'name' => 'Ryan',
            'email' => 'ryan@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('1234'),
            'is_permission' => 2
        ]);
    }
}
