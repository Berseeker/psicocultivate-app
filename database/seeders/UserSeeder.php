<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'nombre' => 'Admin',
            'apellidos' => 'Gomez',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);

        $user->assignRole('superAdmin');

        $user = User::create([
            'nombre' => 'Osiris',
            'apellidos' => 'Morales Ruiz',
            'email' => 'osiris.moralesrz@gmail.com',
            'password' => Hash::make('Osiris23'),
        ]);

        $user->assignRole(['superAdmin', 'psicologa']);

        $user = User::create([
            'nombre' => 'Psicologo',
            'apellidos' => 'Test',
            'email' => 'terapeuta@gmail.com',
            'password' => Hash::make('Terapeuta'),
        ]);

        $user->assignRole(['superAdmin', 'psicologa']);

        $user = User::create([
            'nombre' => 'Pedro',
            'apellidos' => 'Sanchez',
            'email' => 'user@gmail.com',
            'password' => Hash::make('User234'),
        ]);

        $user->assignRole('usuario');

        $user = User::create([
            'nombre' => 'Katherin',
            'apellidos' => 'Sanchez',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('User234'),
        ]);

        $user->assignRole('usuario');

        $user = User::create([
            'nombre' => 'Sabrina',
            'apellidos' => 'Perez',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('User234'),
        ]);

        $user->assignRole('usuario');
    }
}
