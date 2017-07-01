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
      'monto' => 10000,
      ]);
    \DB::table('tutorias')->insert([
      'id' => 3,
      'estudiante_id' => 1,
      'ramo_id' => 3,
      ]);
    }
}
