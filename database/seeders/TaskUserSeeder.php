<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = \Carbon\CarbonImmutable::now();
        foreach (DB::table('users')->get() as $user) {
            DB::table('users_tasks')->insert([
                'user_id' => $user->id,
                'task_id' => random_int(1, 2),
                'start_date' => $date,
                'due_date' => $date->add(random_int(1,7), 'day'),
                'end_date' => $date->add(random_int(2,8), 'day'),
                'status' => random_int(1,4),
                'created_at' => $date,
            ]);
        }
    }
}
