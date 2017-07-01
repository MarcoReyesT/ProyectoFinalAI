<?php

use Illuminate\Database\Seeder;

class RamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ramos')->insert([
  		'id' => 1,
  		'nombre_ramo' => 'Ecuaciones Diferenciales',
  		]);
    \DB::table('ramos')->insert([
      'id' => 2,
      'nombre_ramo' => 'Redes de Computadores',
      ]);
    \DB::table('ramos')->insert([
      'id' => 3,
      'nombre_ramo' => 'Anatomia 1',
      ]);
    \DB::table('ramos')->insert([
      'id' => 4,
      'nombre_ramo' => 'Anatomia 2',
      ]);
    \DB::table('ramos')->insert([
      'id' => 5,
      'nombre_ramo' => 'Calculo 2',
      ]);
    \DB::table('ramos')->insert([
      'id' => 6,
      'nombre_ramo' => 'Fisica 2',
      ]);
    }
}
