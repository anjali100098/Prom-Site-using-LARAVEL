<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'ann',
            'email' => 'ann@gmail.com',
            'password'=>'1234',
            'usertype'=>'user',
        ]);

        // Create the second user
        User::factory()->create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password'=>'2345',
            'usertype'=>'admin',
        ]);
    }
}
