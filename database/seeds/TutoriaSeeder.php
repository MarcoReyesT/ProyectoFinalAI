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
  		'tutor_id' => 2,
  		'ramo_id' => 2,
  		]);
    \DB::table('tutorias')->insert([
      'id' => 2,
      'tutor_id' => 2,
      'ramo_id' => 1,
      ]);
    \DB::table('tutorias')->insert([
      'id' => 3,
      'tutor_id' => 1,
      'ramo_id' => 3,
      ]);
    }
}
