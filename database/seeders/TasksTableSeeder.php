<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //https://qiita.com/minato-naka/items/0e709cb0e6628c82c1c5#seeder%E4%BD%9C%E6%88%90
        for ($i = 1; $i <= 10; $i++) {
             Task::create([
                     'title' => 'title' . $i,
                     'content' => 'content' . $i,
                     'member' => 'member' . $i,
                 ]);
             }
    }
}
