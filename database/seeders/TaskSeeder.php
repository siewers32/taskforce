<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'Programmeren 1',
            'category' => 1,
            'code' => 'PROG1',
            'created_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('tasks')->insert([
            'title' => 'Programmeren 2',
            'category' => 1,
            'code' => 'PROG1',
            'created_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('tasks')->insert([
            'title' => 'Project 101',
            'category' => 2,
            'code' => 'PROJ101',
            'created_at' =>  \Carbon\Carbon::now(),
        ]);
    }
}
