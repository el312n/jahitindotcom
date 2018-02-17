<?php

use Illuminate\Database\Seeder;

class metodepembayaranseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('MetodePembayaran')->insert(['MetodePembayaran' => 'BRI','Description' => 'BRI 652026622 AN ASRI',]);
        DB::table('MetodePembayaran')->insert(['MetodePembayaran' => 'COD','Description' => 'CASH ON DELIVERY']);
    }
}
