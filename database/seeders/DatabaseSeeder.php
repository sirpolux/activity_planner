<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name'=>'Machong Paul',
            'email'=>'macpaul@gmail.com',
            'password'=>bcrypt('polux'),
            'email_verified_at'=> time()

        ]);

        Project::factory()
                        ->count(30)
                        ->hasTasks(30)
                        ->create();
    }
}
