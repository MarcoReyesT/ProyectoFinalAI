<?php

use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estudiantes')->insert([
  		'id' => 1,
  		'rut' => '12.236.235-8',
      'nombre' => 'Cristian',
      'apellido' => 'Decap',
      'telefono' => '671234549',
      'correo' => 'cristian.d@mail.com',
  		]);
    \DB::table('estudiantes')->insert([
      'id' => 2,
      'rut' => '10.986.999-2',
      'nombre' => 'Marco',
      'apellido' => 'Rojas',
      'telefono' => '8956486566',
      'correo' => 'marco.r@mail.com',
      ]);
    \DB::table('estudiantes')->insert([
      'id' => 3,
      'rut' => '11.111.111-1',
      'nombre' => 'Juan',
      'apellido' => 'Perez',
      'telefono' => '8744585696',
      'correo' => 'juan.p@mail.com',
      ]);
     \DB::table('estudiantes')->insert([
      'id' => 4,
      'rut' => '18.987.456-k',
      'nombre' => 'Masiel',
      'apellido' => 'Díaz',
      'telefono' => '8766584696',
      'correo' => 'masiel.d@mail.com',
      ]);
      \DB::table('estudiantes')->insert([
      'id' => 5,
      'rut' => '16.156.611-8',
      'nombre' => 'Lucia',
      'apellido' => 'Cordova',
      'telefono' => '8744656774',
      'correo' => 'lcuia.c@mail.com',
      ]); \DB::table('estudiantes')->insert([
      'id' => 6,
      'rut' => '15.515.981-6',
      'nombre' => 'Renata',
      'apellido' => 'Molina',
      'telefono' => '987654567',
      'correo' => 'renata.m@mail.com',
      ]); \DB::table('estudiantes')->insert([
      'id' => 7,
      'rut' => '21.134.569-3',
      'nombre' => 'Carmen',
      'apellido' => 'Perez',
      'telefono' => '876453213',
      'correo' => 'carmen.p@mail.com',
      ]);
    }
}
