<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(['kodeUser'=>'DE0001','email'=>'DestaL@gmail.com','name'=>'Desta L','password'=>bcrypt('DE00011'),'alamat'=>'-','telepon'=>'-','role_id'=>'2',]);
        DB::table('users')->insert(['kodeUser'=>'IN0001','email'=>'Indriana@gmail.com','name'=>'Indriana','password'=>bcrypt('IN00012'),'alamat'=>'-','telepon'=>'-','role_id'=>'2',]);
        DB::table('users')->insert(['kodeUser'=>'JA0001','email'=>'JajaM@gmail.com','name'=>'Jaja M','password'=>bcrypt('JA00013'),'alamat'=>'-','telepon'=>'-','role_id'=>'2',]);
        DB::table('users')->insert(['kodeUser'=>'DE0002','email'=>'Denada@gmail.com','name'=>'Denada L','password'=>bcrypt('DE00024'),'alamat'=>'-','telepon'=>'-','role_id'=>'2',]);
    }
}
