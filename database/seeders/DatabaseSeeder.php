<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Nehad Altimimi',
        //     'email' => 'nehad@gmail.com',
        //     'role' =>  'admin'
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Laura',
        //     'email' => 'laura@gmail.com',
        //     'role' =>  'member'
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Tim',
        //     'email' => 'tim26618@gmail.com',
        //     'role' =>  'instructor'
        // ]);
        $this->call([
            UserSeeder::class,
            ClassTypeSeeder::class,
            // SchudledClassSeeder::class
        ]);

    }
}
