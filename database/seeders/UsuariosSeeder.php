<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Usuarios;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {   
         DB::table('usuarios')->insert([
            'User_Name' => 'Admon',
            'Mail' => 'admon@robotics.com',
            'Password' => 'Adm@2022',
            'Rol' => 'Administrativo',
          ]);    

          DB::table('usuarios')->insert([
            'User_Name' => 'Tecmilenio',
            'Mail' => 'tecmilenio@robotics.com',
            'Password' => 'Adm@2022',
            'Rol' => 'Profesor',
          ]);   

          DB::table('usuarios')->insert([
            'User_Name' => 'Estudiante',
            'Mail' => 'student@robotics.com',
            'Password' => 'Adm@2022',
            'Rol' => 'Estudiante',
          ]);   

        }
    }
}
