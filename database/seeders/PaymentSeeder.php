<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            'id' => 1,
            'title' => 'Einkauf Migros 27.10.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 2,
            'title' => 'Internet & Miete November 2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 3,
            'title' => 'Einkauf Globus 27.10.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 4,
            'title' => 'Einkauf Migros 25.10.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 5,
            'title' => 'Einkauf Migros 20.10.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 6,
            'title' => 'Einkauf Galaxus 14.10.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 7,
            'title' => 'Einkauf Migros 13.10.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 8,
            'title' => 'Einkauf',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 9,
            'title' => 'Einkauf Migros vom 29.09.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 10,
            'title' => 'Einkauf Migros vom 08.10.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 11,
            'title' => 'Globus Ravioli & Chilli',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 12,
            'title' => 'wii',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 13,
            'title' => 'digitec Ethernet-Patchkabel 10m',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 14,
            'title' => 'Oswald Bullion rind & gemüse',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 15,
            'title' => 'Einkauf IKEA 01.10.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 16,
            'title' => 'Einkauf vom 30.09.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 17,
            'title' => 'Tankgutschrift Vater Leo',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'id' => 18,
            'title' => 'Einkauf vom 27.09.2022',
            'closed' => 0,
            'group_id' => GroupSeeder::ID,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
