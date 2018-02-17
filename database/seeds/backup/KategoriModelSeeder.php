<?php

use Illuminate\Database\Seeder;

class KategoriModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoriModel')->insert(['kodeKategori'=>'KM0001','namaKategori'=>'Kebaya',]);
        DB::table('kategoriModel')->insert(['kodeKategori'=>'KM0002','namaKategori'=>'Gamis',]);
        DB::table('kategoriModel')->insert(['kodeKategori'=>'KM0003','namaKategori'=>'Kemeja',]);
        DB::table('kategoriModel')->insert(['kodeKategori'=>'KM0004','namaKategori'=>'Other',]);
    }
}
