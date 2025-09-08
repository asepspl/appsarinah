<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buat seeder
        $roles = [
            ['role_name'=>'admin','descriptin'=>'Administrator'],
            ['role_name'=>'casher','description'=>'Kasir'],
            ['role_name'=>'customer','description'=>'Pelanggan'],
        ];

        DB::table('roles')->insert($roles);

    }
}
