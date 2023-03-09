<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\cursos;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'Course_Name' => 'Introduction to robotics',
            'Kit' => 'StartedKit',
          ]);    

          DB::table('cursos')->insert([
            'Course_Name' => 'Introduction to robotics',
            'Kit' => 'StartedKit',
          ]); 

          DB::table('cursos')->insert([
            'Course_Name' => 'Programming for Robotics',
            'Kit' => 'Educational Robotics Kit',
          ]); 

          DB::table('cursos')->insert([
            'Course_Name' => 'Characteristics of a Robot',
            'Kit' => 'Kit5',
          ]);
          
    }
}
