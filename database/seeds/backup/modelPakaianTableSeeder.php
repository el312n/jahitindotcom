<?php

use Illuminate\Database\Seeder;

class modelPakaianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('modelpakaian')->insert(['kodeKategori'=>'KM0001','kodeModel'=>'KBY001', 'namaModel'=>'KEBAYA MODEL SANGKURIANG', 'kodeUser'=>'DE0001', 'namaKain'=>'KAIN SANGKURIANG', 'lamaMenjahit'=>'15', 'Harga'=>'200000',]);
        DB::table('modelpakaian')->insert(['kodeKategori'=>'KM0001','kodeModel'=>'KBY002', 'namaModel'=>'KEBAYA LALARIAN', 'kodeUser'=>'DE0001', 'namaKain'=>'KAIN LALARIAN', 'lamaMenjahit'=>'10', 'Harga'=>'200000',]);
        DB::table('modelpakaian')->insert(['kodeKategori'=>'KM0001','kodeModel'=>'KBY003', 'namaModel'=>'KEBAYA MODEL SANGKURIANG', 'kodeUser'=>'IN0001', 'namaKain'=>'KAIN SANGKURIANG', 'lamaMenjahit'=>'15', 'Harga'=>'200000',]);
        DB::table('modelpakaian')->insert(['kodeKategori'=>'KM0001','kodeModel'=>'KBY004', 'namaModel'=>'KEBAYA MODEL IJO ROYO2', 'kodeUser'=>'JA0001', 'namaKain'=>'KAIN SANGKURIANG', 'lamaMenjahit'=>'30', 'Harga'=>'200000',]);
        DB::table('modelpakaian')->insert(['kodeKategori'=>'KM0001','kodeModel'=>'KBY005', 'namaModel'=>'KEBAYA MODEL IJO ROYO2', 'kodeUser'=>'DE0001', 'namaKain'=>'KAIN SANGKURIANG', 'lamaMenjahit'=>'30', 'Harga'=>'200000',]);
        DB::table('modelpakaian')->insert(['kodeKategori'=>'KM0001','kodeModel'=>'KBY006', 'namaModel'=>'KEBAYA MODEL IJO ROYO2', 'kodeUser'=>'DE0002', 'namaKain'=>'KAIN SANGKURIANG', 'lamaMenjahit'=>'20', 'Harga'=>'200000',]);
        DB::table('modelpakaian')->insert(['kodeKategori'=>'KM0001','kodeModel'=>'KBY007', 'namaModel'=>'KEBAYA LAMA', 'kodeUser'=>'DE0002', 'namaKain'=>'KAIN SANGKURIANG', 'lamaMenjahit'=>'10', 'Harga'=>'200000',]);
    }
}
