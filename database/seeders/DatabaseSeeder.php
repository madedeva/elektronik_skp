<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Student::factory(5)->create();
        \App\Models\Point::factory(5)->create();
        \App\Models\Event::factory(5)->create();
    }
}
