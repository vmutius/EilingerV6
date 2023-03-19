<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                'id'         => 1,
                'name'       => 'draft',
            ],
            [
                'id'         => 2,
                'name'       => 'completed',
            ],
        ];

        Status::insert($statuses);
    }
}
