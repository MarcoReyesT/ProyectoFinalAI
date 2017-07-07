<?php

use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tutores')->insert([
  		'id' => 1,
  		'rut' => '12.236.235-8',
      'nombre' => 'José',
      'apellido' => 'Cuevas',
      'telefono' => '676656765',
      'correo' => 'jose.c@mail.com',
  		]);
        \DB::table('tutores')->insert([
      'id' => 2,
      'rut' => '12.334.235-8',
      'nombre' => 'Camilo',
      'apellido' => 'Carmine',
      'telefono' => '998989898',
      'correo' => 'camilo.c@mail.com',
      ]);    \DB::table('tutores')->insert([
      'id' => 3,
      'rut' => '12.236.128-8',
      'nombre' => 'Maria',
      'apellido' => 'Hernandez',
      'telefono' => '912332134',
      'correo' => 'maria.h@mail.com',
      ]);    \DB::table('tutores')->insert([
      'id' => 4,
      'rut' => '17.736.535-8',
      'nombre' => 'Sandra',
      'apellido' => 'Prieto',
      'telefono' => '879908871',
      'correo' => 'sandra.p@mail.com',
      ]);    \DB::table('tutores')->insert([
      'id' => 5,
      'rut' => '13.146.235-k',
      'nombre' => 'Andres',
      'apellido' => 'Lagos',
      'telefono' => '987654323',
      'correo' => 'andres.a@mail.com',
      ]);    \DB::table('tutores')->insert([
      'id' => 6,
      'rut' => '17.536.987-6',
      'nombre' => 'Michelle',
      'apellido' => 'Torres',
      'telefono' => '876541234',
      'correo' => 'michelle.t@mail.com',
      ]);    \DB::table('tutores')->insert([
      'id' => 7,
      'rut' => '18.236.987-k',
      'nombre' => 'Juan',
      'apellido' => 'Toro',
      'telefono' => '875436765',
      'correo' => 'juan.t@mail.com',
      ]);
    }
}
