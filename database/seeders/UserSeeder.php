<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    const ID_LEO = 1;
    const ID_KAI = 2;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => self::ID_LEO,
            'name' => 'leo',
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'id' => self::ID_KAI,
            'name' => 'kai',
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
