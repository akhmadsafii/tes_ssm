<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sales = [
            [
                'id' => 'INV-2211-A0031-0011',
                'sales_no' => 'POS-00011',
                'customer_id' => 'CUST011',
                'salesman_id' => 'SLM0011',
                'create_by' => 'USR111',
                'created_at' => '2022-11-01 10:10:00',
            ],
            [
                'id' => 'INV-2211-A0031-0002',
                'sales_no' => 'POS-00002',
                'customer_id' => 'CUST011',
                'salesman_id' => 'SLM0002',
                'create_by' => 'USR002',
                'created_at' => '2022-11-02 10:10:00',
            ],
            [
                'id' => 'INV-2211-A0031-0003',
                'sales_no' => 'POS-00003',
                'customer_id' => 'CUST002',
                'salesman_id' => 'SLM0003',
                'create_by' => 'USR003',
                'created_at' => '2022-11-03 10:10:00',
            ],
            [
                'id' => 'INV-2211-A0031-0004',
                'sales_no' => 'POS-00004',
                'customer_id' => 'CUST011',
                'salesman_id' => 'SLM0003',
                'create_by' => 'USR002',
                'created_at' => '2022-11-05 10:10:00',
            ],
            [
                'id' => 'INV-2211-A0031-0005',
                'sales_no' => 'POS-00005',
                'customer_id' => 'CUST003',
                'salesman_id' => 'SLM0011',
                'create_by' => 'USR003',
                'created_at' => '2022-11-05 10:10:00',
            ],
            [
                'id' => 'INV-2211-A0031-0006',
                'sales_no' => 'POS-00006',
                'customer_id' => 'CUST003',
                'salesman_id' => 'SLM0002',
                'create_by' => 'USR002',
                'created_at' => '2022-11-06 10:10:00',
            ],
            [
                'id' => 'INV-2211-A0031-0007',
                'sales_no' => 'POS-00007',
                'customer_id' => 'CUST002',
                'salesman_id' => 'SLM0011',
                'create_by' => 'USR002',
                'created_at' => '2022-11-07 10:10:00',
            ],
        ];

        DB::table('sales')->insert($sales);
    }
}
