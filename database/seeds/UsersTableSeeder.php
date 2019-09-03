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
        DB::table('users')->delete();

        DB::table('users')->insert([
            ['name'=>'Admin','email'=>'admin@mail.com','role'=>'admin','password'=>bcrypt('123456')],
            ['name'=>'User','email'=>'user@mail.com','role'=>'user','password'=>bcrypt('123456')],
        ]);
    }
}
