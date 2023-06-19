<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\Group;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Task::factory(10)->create();

        // Task::factory()->create([
        //     'title' => 'Test User',
        //     'content' => 'test@example.com',
        // ]);

        $this->call([TasksTableSeeder::class]);
        $this->call([GroupSeeder::class]);
    }
}
