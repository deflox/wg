<?php

namespace Database\Seeders;

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
        $this->call([
            ShareTypeSeeder::class,
            GroupSeeder::class,
            UserSeeder::class,
            PaymentSeeder::class,
            TransactionSeeder::class,
            DebtorSeeder::class,
        ]);
    }
}
