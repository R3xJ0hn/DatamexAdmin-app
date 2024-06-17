<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'datamex.meycauayan22@gmail.com',
                'role' => 'admin',
                'password' => '$2y$12$ocRRrBO43Uy5l.kAcSawreoNRP/KJEmEHb4iann2dFMeI8hbWyuNa', //test1234
            ],

            [
                'name' => 'Rex John Barinas',
                'email' => 'rexjohnsilva@gmail.com',
                'role' => 'admin',
                'password' => '$2y$12$KFQRPXY1iigwvTEZCDy5Tur/NC25hjWFjhL9h1du9WVu5DxSZChem',
            ],

            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => '$2y$12$ocRRrBO43Uy5l.kAcSawreoNRP/KJEmEHb4iann2dFMeI8hbWyuNa', 
            ],

            [
                'name' => 'Registrar',
                'email' => 'registrar@gmail.com',
                'role' => 'registrar',
                'password' => '$2y$12$ocRRrBO43Uy5l.kAcSawreoNRP/KJEmEHb4iann2dFMeI8hbWyuNa',
            ],
            [
                'name' => 'Student',
                'email' => 'student@gmail.com',
                'role' => 'student',
                'password' => '$2y$12$ocRRrBO43Uy5l.kAcSawreoNRP/KJEmEHb4iann2dFMeI8hbWyuNa',
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@gmail.com',
                'role' => 'guest',
                'password' => '$2y$12$ocRRrBO43Uy5l.kAcSawreoNRP/KJEmEHb4iann2dFMeI8hbWyuNa',
            ]
        ]);



    }
}
