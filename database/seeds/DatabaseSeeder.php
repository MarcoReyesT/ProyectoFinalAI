<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TutorSeeder::class);
        $this->call(RamoSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(TutoriaSeeder::class);
    }
}
