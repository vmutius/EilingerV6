<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run()
    {
        $countries = json_decode(file_get_contents(database_path('seeders/countries.json')), true);

        DB::table('countries')->insert($countries);
    }
}
