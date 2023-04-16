<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    public function run()
    {
        $currencies = json_decode(file_get_contents(database_path('seeders/currencies.json')), true);

        DB::table('currencies')->insert($currencies);
    }
}
