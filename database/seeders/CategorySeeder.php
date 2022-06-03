<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'title' => 'Algemeen',
            'created_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'title' => 'Projecten',
            'created_at' =>  \Carbon\Carbon::now(),
        ]);
    }
}
