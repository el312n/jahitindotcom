<?php

use Illuminate\Database\Seeder;

class roleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('roles')->insert(['title' => 'Customer', 'slug' => 'Cust',]);
		DB::table('roles')->insert(['title' => 'Penjahit', 'slug' => 'Penj',]);
		DB::table('roles')->insert(['title' => 'Desainer', 'slug' => 'Desa',]);
        DB::table('roles')->insert(['title' => 'Admin', 'slug' => 'Adm',]);
    }
}
