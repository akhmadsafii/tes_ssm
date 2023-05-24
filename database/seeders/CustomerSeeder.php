<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'customer_id' => 'CUST011',
                'customer_name' => 'HAPSAH',
                'address' => 'JAKARTA',
                'nick_name' => 'HPS',
                'input_by' => 'USR002',
                'created_at' => '2022-11-11 10:10:00',
            ],
            [
                'customer_id' => 'CUST002',
                'customer_name' => 'TELLA',
                'address' => 'JAKARTA',
                'nick_name' => 'TL',
                'input_by' => 'USR002',
                'created_at' => '2022-11-11 10:10:00',
            ],
            [
                'customer_id' => 'CUST003',
                'customer_name' => 'DINI',
                'address' => 'JAKARTA',
                'nick_name' => 'DN',
                'input_by' => 'USR002',
                'created_at' => '2022-11-11 10:10:00',
            ],
        ];

        DB::table('customers')->insert($customers);
    }
}
