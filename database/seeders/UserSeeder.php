<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Petugas Perpus',
                'email' => 'officer@lib.com',
                'username' => 'officerlib',
                'password' => bcrypt('12345678'),
                'level' => 1
            ],
            [
                'name' => 'Kevin Sanjaya',
                'email' => 'kevin@lib.com',
                'username' => 'sankevin',
                'password' => bcrypt('12345678'),
                'level' => 2
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
