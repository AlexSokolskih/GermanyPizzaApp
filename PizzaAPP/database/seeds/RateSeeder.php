<?php

use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rates')->insert([
            'usd_rub' => 70,
            'eur_rub' => 80,
        ]);
    }
}
