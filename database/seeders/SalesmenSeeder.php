<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salesmen = [
            [
                'id' => 'SLM0011',
                'sales_person' => 'KANIA',
                'alamat' => 'JAKARTA',
                'input_by' => 'USR111',
                'created_at' => '2022-11-11 10:10:00',
            ],
            [
                'id' => 'SLM0002',
                'sales_person' => 'DARA',
                'alamat' => 'JAKARTA',
                'input_by' => 'USR003',
                'created_at' => '2022-11-11 10:10:00',
            ],
            [
                'id' => 'SLM0003',
                'sales_person' => 'UZI',
                'alamat' => 'JAKARTA',
                'input_by' => 'USR002',
                'created_at' => '2022-11-11 10:10:00',
            ],
        ];

        DB::table('salesmen')->insert($salesmen);
    }
}
