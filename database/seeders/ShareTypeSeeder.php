<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShareTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('share_types')->insert([
            'name' => 'equal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('share_types')->insert([
            'name' => 'percentage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('share_types')->insert([
            'name' => 'values',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
