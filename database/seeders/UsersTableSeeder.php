<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crear con anterioridad un Usuario
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'), // password
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Medico',
            'email' => 'medico@medico.com',
            'email_verified_at' => now(),
            'password' => bcrypt('medico'), // password
            'role' => 'doctor',
        ]);
        User::create([
            'name' => 'Paciente',
            'email' => 'paciente@paciente.com',
            'email_verified_at' => now(),
            'password' => bcrypt('paciente'), // password
            'role' => 'paciente',
        ]);

        User::factory()
        ->count(200)
        ->state(['role'=>'paciente'])
        ->create();
    }
}
