<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Slide;
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

        User::factory()->create([
            'name' => 'Rozi Tendwa',
            'email' => 'rosetendwa39@gmail.com',
            'password' => bcrypt("password"),
            'position' => 'Manager',
        ]);
        User::factory(9)->create();
        Slide::factory(3)->create();
        Service::factory(3)->create();

    }
}