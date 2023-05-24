<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 'usr111',
                'username' => 'adm-01',
                'password' => bcrypt('fd261'),
                'department' => 'IT',
                'input_by' => 'usr111',
                'created_at' => '2022-11-11 10:10'
            ],
            [
                'id' => 'usr002',
                'username' => 'ferdi',
                'password' => bcrypt('ecfa2'),
                'department' => 'IT',
                'input_by' => 'usr111',
                'created_at' => '2022-11-11 10:10'
            ],
            [
                'id' => 'usr003',
                'username' => 'nouval',
                'password' => bcrypt('59d8f'),
                'department' => 'IT',
                'input_by' => 'usr111',
                'created_at' => '2022-11-11 10:10'
            ],
        ];

        // Insert data ke tabel ms_user
        DB::table('users')->insert($users);
    }
}
