<?php

use Illuminate\Database\Seeder;

class ArtistaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artista')->delete();

        DB::table('artista')->insert([
            //1
            ['nombre'=>'Juan','apellido'=>'Gabriel','nacionalidad'=>'Mexico'],
            //2
            ['nombre'=>'Maluma','apellido'=>'Baby','nacionalidad'=>'Colombia'],
            ['nombre'=>'Enrique','apellido'=>'Iglesias','nacionalidad'=>'España']
        ]);
    }
}
