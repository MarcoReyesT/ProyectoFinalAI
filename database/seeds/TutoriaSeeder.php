<?php

use Illuminate\Database\Seeder;

class TutoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return votutor_id
     */
    public function run()
    {
        \DB::table('tutorias')->insert([
      'id' => 1,
      'estudiante_id' => 2,
  		'ramo_id' => 2,
      'tutor_id' => 2,
      'fecha' => '05-06-2017',
      'monto' => 5000,
  		]);
    \DB::table('tutorias')->insert([
      'id' => 2,
      'estudiante_id' => 3,
      'ramo_id' => 1,
      'tutor_id' => 2,
      'fecha' => '25-03-2017',
      'monto' => 12000,
      ]);
    \DB::table('tutorias')->insert([
      'id' => 3,
      'estudiante_id' => 1,
      'ramo_id' => 3,
      ]);
    \DB::table('tutorias')->insert([
      'id' => 4,
      'estudiante_id' => 7,
      'ramo_id' => 6,
      ]);
    \DB::table('tutorias')->insert([
      'id' => 5,
      'estudiante_id' => 1,
      'ramo_id' => 4,
      ]);
    \DB::table('tutorias')->insert([
      'id' => 6,
      'estudiante_id' => 1,
      'ramo_id' => 5,
      'tutor_id' => 7,
      'fecha' => '22-04-2017',
      'monto' => 17000,
      ]);
    \DB::table('tutorias')->insert([
      'id' => 7,
      'estudiante_id' => 1,
      'ramo_id' => 3,
      'tutor_id' => 5,
      'fecha' => '21-05-2017',
      'monto' => 15000,
      ]);
    }
}
