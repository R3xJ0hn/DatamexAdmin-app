<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                'name' => 'Admin',
                'email' => 'datamex.meycauayan22@gmail.com',
                'role' => 'admin',
                'password' => '$2y$12$rw.wgRzHFAMLS9J5bQStGOp9wVh.DhnTIMa2Ywf4kcRpiEYFCGvf.', //admin123456
            ]

        );

        User::insert(
            [
                'name' => 'Rex John Barinas',
                'email' => 'rexjohnsilva@gmail.com',
                'role' => 'admin',
                'password' => '$2y$12$KFQRPXY1iigwvTEZCDy5Tur/NC25hjWFjhL9h1du9WVu5DxSZChem',
            ]

        );
    }
}
