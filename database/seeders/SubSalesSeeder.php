<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubSalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subSales = [
            [
                'sales_id' => 'INV-2211-A0031-0011',
                'item_id' => 'ITM011',
                'qty_sales' => 3,
                'unit_price' => 50000,
            ],
            [
                'sales_id' => 'INV-2211-A0031-0011',
                'item_id' => 'ITM002',
                'qty_sales' => 2,
                'unit_price' => 8000,
            ],
            [
                'sales_id' => 'INV-2211-A0031-0002',
                'item_id' => 'ITM011',
                'qty_sales' => 60,
                'unit_price' => 100,
            ],
            [
                'sales_id' => 'INV-2211-A0031-0003',
                'item_id' => 'ITM003',
                'qty_sales' => 1,
                'unit_price' => 511000,
            ],
            [
                'sales_id' => 'INV-2211-A0031-0004',
                'item_id' => 'ITM002',
                'qty_sales' => 1,
                'unit_price' => 3000,
            ],
            [
                'sales_id' => 'INV-2211-A0031-0005',
                'item_id' => 'ITM011',
                'qty_sales' => 1,
                'unit_price' => 1000,
            ],
            [
                'sales_id' => 'INV-2211-A0031-0006',
                'item_id' => 'ITM003',
                'qty_sales' => 110,
                'unit_price' => 70000,
            ],
            [
                'sales_id' => 'INV-2211-A0031-0007',
                'item_id' => 'ITM011',
                'qty_sales' => 260,
                'unit_price' => 61000,
            ],
            [
                'sales_id' => 'INV-2211-A0031-0007',
                'item_id' => 'ITM002',
                'qty_sales' => 110,
                'unit_price' => 88000,
            ],
            [
                'sales_id' => 'INV-2211-A0031-0008',
                'item_id' => 'ITM011',
                'qty_sales' => 2,
                'unit_price' => 50000,
            ],
        ];

        DB::table('sub_sales')->insert($subSales);
    }
}
