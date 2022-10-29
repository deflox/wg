<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('transactions')->insert([
            'id' => 1,
            'description' => 'Sarasay Mango 75cl',
            'amount' => 0.49,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 2,
            'description' => 'Coconut Milk',
            'amount' => 1.05,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 3,
            'description' => 'Sun Queen Ananas',
            'amount' => 0.53,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 4,
            'description' => 'Peperoni rot',
            'amount' => 0.35,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 5,
            'description' => 'Knoblauch',
            'amount' => 0.5,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 6,
            'description' => 'Zitronenreibe',
            'amount' => 5.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 7,
            'description' => 'AdR IP Vollmilch past.',
            'amount' => 1.15,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 8,
            'description' => 'Knorr Saucenbinder',
            'amount' => 3.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 9,
            'description' => 'Glasdose rund 1300ml',
            'amount' => 6.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 10,
            'description' => 'Internet November 2022',
            'amount' => 32.38,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 11,
            'description' => 'Miete November 2022',
            'amount' => 584.5,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 12,
            'description' => 'BUSHMILLS 10Y 70CL',
            'amount' => 50,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 13,
            'description' => 'Mangostreifen',
            'amount' => 7,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 14,
            'description' => 'Pouletgeschnetzeltes',
            'amount' => 4,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 15,
            'description' => 'Glasdose rund 1300ml',
            'amount' => 13.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 16,
            'description' => 'Kuchengitter',
            'amount' => 4.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 17,
            'description' => 'Party Pizza Crackers',
            'amount' => 1.04,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 18,
            'description' => 'Lauch grün',
            'amount' => 3.65,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 19,
            'description' => 'Ricotta Galbani',
            'amount' => 3,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 20,
            'description' => 'Valflora Vollrahm',
            'amount' => 4.2,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 21,
            'description' => 'Bio Vollmilch 3.9%Fett',
            'amount' => 1.25,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 22,
            'description' => 'Fever Tree Mediterrane',
            'amount' => 7.8,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 23,
            'description' => 'Butterblätterteig',
            'amount' => 3.5,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 24,
            'description' => 'Soft Deluxe Ultra 24x',
            'amount' => 16,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 25,
            'description' => 'Müllex Kehricht-Kippsystem (35 l)',
            'amount' => 63,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 26,
            'description' => 'Jowa-Bürli (1/4 Anteil)',
            'amount' => 0.8,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 27,
            'description' => 'Knoblauch',
            'amount' => 0.5,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 28,
            'description' => 'Kartoffeln festkochend',
            'amount' => 0.75,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 29,
            'description' => 'Bio Karotten',
            'amount' => 1.8,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 30,
            'description' => 'AdR IP Vollmilch past.',
            'amount' => 1.15,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 31,
            'description' => 'MClass Bratbutter',
            'amount' => 11,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 32,
            'description' => 'Tomaten gehackt 400g',
            'amount' => 1.2,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 33,
            'description' => 'Farmer Schoko low fat',
            'amount' => 4.7,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 34,
            'description' => 'Agnesi Fusilli 500g',
            'amount' => 1.68,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 35,
            'description' => 'Tiefkühldosen 0.75l',
            'amount' => 4.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 36,
            'description' => 'tiefkühldosen',
            'amount' => 2.1,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 37,
            'description' => 'burger',
            'amount' => 7.05,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 38,
            'description' => 'Knoblauch',
            'amount' => 0.5,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 39,
            'description' => 'kräuter itl',
            'amount' => 1.75,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 40,
            'description' => 'paprika',
            'amount' => 1.35,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 41,
            'description' => 'butterdose',
            'amount' => 3.57,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 42,
            'description' => 'passata di pomodoro',
            'amount' => 9.2,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 43,
            'description' => 'zwiebeln',
            'amount' => 2,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 44,
            'description' => 'tonic',
            'amount' => 7.8,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 45,
            'description' => 'Kalbsgeschnetzeltes',
            'amount' => 26.35,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 46,
            'description' => 'Eier Freiland 4x68g+',
            'amount' => 2.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 47,
            'description' => 'Rüstmesser Wellschliff',
            'amount' => 2.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 48,
            'description' => 'Candida Fresh Gel Anti',
            'amount' => 2.75,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 49,
            'description' => 'Bratenschaufel 2x',
            'amount' => 2.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 50,
            'description' => 'GP Bratpfanne 24cm',
            'amount' => 59.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 51,
            'description' => 'Ergo Schöpflöffel',
            'amount' => 6.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 52,
            'description' => 'Lauch grün',
            'amount' => 0.85,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 53,
            'description' => 'Zwiebeln',
            'amount' => 1.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 54,
            'description' => 'Chicco d\'Oro gemahlen',
            'amount' => 10.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 55,
            'description' => 'MClass Blätterteig',
            'amount' => 5.1,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 56,
            'description' => 'Gartenerbsen 750g',
            'amount' => 3.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 57,
            'description' => 'Treteimer 3l',
            'amount' => 11.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 58,
            'description' => 'Linsoft Classic 56x10',
            'amount' => 3.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 59,
            'description' => 'MBud Kartoffeln mehl.',
            'amount' => 4.2,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 60,
            'description' => 'Federstange 21 125-220',
            'amount' => 19.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 61,
            'description' => 'Heinz Ketchup 500ml',
            'amount' => 3.45,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 62,
            'description' => 'Kochbutter',
            'amount' => 3.35,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 63,
            'description' => 'MBud Haushaltmehl',
            'amount' => 0.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 64,
            'description' => 'MClass Mayonnaise 265g',
            'amount' => 1.55,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 65,
            'description' => 'Globus Ravioli & Chilli',
            'amount' => 29.7,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 66,
            'description' => 'wii',
            'amount' => 8,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 67,
            'description' => 'digitec Ethernet-Patchkabel 10m',
            'amount' => 19.3,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 68,
            'description' => 'Oswald Bullion rind & gemüse',
            'amount' => 40.85,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_KAI,
            'payment_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 69,
            'description' => 'TOFTBO Badmatte',
            'amount' => 19.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 70,
            'description' => 'BLANDA BLANK Chromstahlschüssel Gross',
            'amount' => 9.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 71,
            'description' => 'IKEA 365+ Behälter',
            'amount' => 9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 72,
            'description' => 'IKEA 365+ Topfunterhalter',
            'amount' => 6.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 73,
            'description' => 'HULTRAP Stange',
            'amount' => 14.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 74,
            'description' => 'DOLD Zuckerstreuer',
            'amount' => 6.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 75,
            'description' => 'ISTAD Beutel',
            'amount' => 5.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 76,
            'description' => 'IDEALISK Korkenzieher',
            'amount' => 3.5,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 77,
            'description' => 'ORDNING Besteckhalter',
            'amount' => 9.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 78,
            'description' => 'LADDA Batterien',
            'amount' => 10.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 79,
            'description' => 'BEVARA N Verschlussklammern',
            'amount' => 4.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 80,
            'description' => 'MARIATHERES Topfhandschuh',
            'amount' => 19.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 81,
            'description' => 'HILDEGUN Geschirrtuch',
            'amount' => 10.8,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 82,
            'description' => 'MAGASIN Teigrolle',
            'amount' => 4.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 83,
            'description' => 'HEMMABAK Springform',
            'amount' => 14.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 84,
            'description' => 'IDEALISK Reibeisen',
            'amount' => 5.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 85,
            'description' => 'KLOCKREN Sieb',
            'amount' => 9.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 86,
            'description' => 'BLANDA BLANK Chromstahlschüssel',
            'amount' => 11.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 87,
            'description' => 'VAGSJÖN Handtuch',
            'amount' => 9.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 88,
            'description' => 'NYSKÖLJD Geschirrunterlage',
            'amount' => 11.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 89,
            'description' => 'VOXNAN Becher Bad',
            'amount' => 13,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 90,
            'description' => 'DIPMA Sortiertaschen',
            'amount' => 9.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 91,
            'description' => 'Sparschäler',
            'amount' => 6.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 92,
            'description' => 'Backpinsel 2x',
            'amount' => 2.5,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 93,
            'description' => 'Tankgutschrift Vater Leo',
            'amount' => 50,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 94,
            'description' => 'Potz Badreiniger',
            'amount' => 3.9,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 95,
            'description' => 'Twist Classic (Küchenpapier)',
            'amount' => 4.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 96,
            'description' => 'MClass Kristallzucker',
            'amount' => 1,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 97,
            'description' => 'JuraSel Salz mit Jod',
            'amount' => 0.95,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')->insert([
            'id' => 98,
            'description' => 'Handy Trio',
            'amount' => 4.55,
            'share_type_id' => 1,
            'user_id' => UserSeeder::ID_LEO,
            'payment_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
