<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'id' => 'ITM011',
                'name' => 'HYGET',
                'category' => 'KAIN',
                'input_by' => 'USR011',
                'created_at' => '2022-11-11 10:10:00',
            ],
            [
                'id' => 'ITM002',
                'name' => 'BABY TERRY',
                'category' => 'KAIN',
                'input_by' => 'USR002',
                'created_at' => '2022-11-11 10:10:00',
            ],
            [
                'id' => 'ITM003',
                'name' => 'WOFEN',
                'category' => 'RIB',
                'input_by' => 'USR003',
                'created_at' => '2022-11-11 10:10:00',
            ],
        ];

        DB::table('items')->insert($items);
    }
}
