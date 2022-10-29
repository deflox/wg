<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DebtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('debtors')->insert([
            'id' => 1,
            'amount' => 0.49,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 2,
            'amount' => 1.05,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 3,
            'amount' => 0.53,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 4,
            'amount' => 0.35,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 5,
            'amount' => 0.25,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 6,
            'amount' => 5.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 7,
            'amount' => 1.15,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 8,
            'amount' => 1.975,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 9,
            'amount' => 6.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 10,
            'amount' => 32.38,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 11,
            'amount' => 584.5,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 12,
            'amount' => 50,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 13,
            'amount' => 7,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 14,
            'amount' => 4,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 15,
            'amount' => 13.9,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 16,
            'amount' => 4.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 17,
            'amount' => 1.04,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 18,
            'amount' => 1.825,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 19,
            'amount' => 1.5,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 20,
            'amount' => 2.1,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 21,
            'amount' => 1.25,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 22,
            'amount' => 3.9,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 22,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 23,
            'amount' => 1.75,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 23,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 24,
            'amount' => 8,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 25,
            'amount' => 31.5,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 26,
            'amount' => 0.8,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 26,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 27,
            'amount' => 0.25,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 28,
            'amount' => 0.375,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 29,
            'amount' => 0.9,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 29,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 30,
            'amount' => 1.15,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 31,
            'amount' => 5.5,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 31,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 32,
            'amount' => 0.6,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 32,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 33,
            'amount' => 4.7,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 33,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 34,
            'amount' => 0.84,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 34,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 35,
            'amount' => 2.45,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 35,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 36,
            'amount' => 1.05,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 36,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 37,
            'amount' => 3.525,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 37,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 38,
            'amount' => 0.25,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 38,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 39,
            'amount' => 0.875,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 39,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 40,
            'amount' => 0.675,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 41,
            'amount' => 1.785,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 41,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 42,
            'amount' => 4.6,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 42,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 43,
            'amount' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 43,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 44,
            'amount' => 3.9,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 44,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 45,
            'amount' => 13.175,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 45,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 46,
            'amount' => 2.75,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 48,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 47,
            'amount' => 1.475,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 49,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 48,
            'amount' => 59.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 49,
            'amount' => 6.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 51,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 50,
            'amount' => 0.425,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 52,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 51,
            'amount' => 0.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 53,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 52,
            'amount' => 5.45,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 54,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 53,
            'amount' => 2.55,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 55,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 54,
            'amount' => 1.975,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 56,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 55,
            'amount' => 1.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 58,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 56,
            'amount' => 2.1,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 59,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 57,
            'amount' => 9.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 60,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 58,
            'amount' => 1.725,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 61,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 59,
            'amount' => 1.675,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 62,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 60,
            'amount' => 0.45,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 63,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 61,
            'amount' => 0.775,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 64,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 62,
            'amount' => 14.85,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 65,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 63,
            'amount' => 4,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 66,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 64,
            'amount' => 19.3,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 67,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 65,
            'amount' => 20.425,
            'user_id' => UserSeeder::ID_LEO,
            'transaction_id' => 68,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 66,
            'amount' => 9.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 69,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 67,
            'amount' => 9.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 70,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 68,
            'amount' => 4.5,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 71,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 69,
            'amount' => 6.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 72,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 70,
            'amount' => 7.475,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 73,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 71,
            'amount' => 6.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 74,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 72,
            'amount' => 2.975,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 75,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 73,
            'amount' => 3.5,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 76,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 74,
            'amount' => 9.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 77,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 75,
            'amount' => 5.475,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 78,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 76,
            'amount' => 2.475,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 79,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 77,
            'amount' => 19.9,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 80,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 78,
            'amount' => 10.8,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 81,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 79,
            'amount' => 14.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 83,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 80,
            'amount' => 5.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 84,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 81,
            'amount' => 9.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 85,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 82,
            'amount' => 11.9,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 86,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 83,
            'amount' => 11.9,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 88,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 84,
            'amount' => 6.5,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 89,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 85,
            'amount' => 1.25,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 92,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 86,
            'amount' => 25,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 93,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 87,
            'amount' => 1.95,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 94,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 88,
            'amount' => 2.475,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 95,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 89,
            'amount' => 0.5,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 96,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 90,
            'amount' => 0.475,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 97,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('debtors')->insert([
            'id' => 91,
            'amount' => 2.275,
            'user_id' => UserSeeder::ID_KAI,
            'transaction_id' => 98,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
