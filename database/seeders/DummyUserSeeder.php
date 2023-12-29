<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataUser = [
            [
                'name' => 'Fiki Admin 1',
                'email' => 'fiki@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('adminmypet'),
            ],
            [
                'name' => 'Putri Admin 2',
                'email' => 'putri@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('adminmypet'),
            ],
            [
                'name' => 'Pimpinan',
                'email' => 'pimpinan@gmail.com',
                'role' => 'pimpinan',
                'password' => bcrypt('hotelhewan'),
            ],
        ];
        foreach ($dataUser as $key => $item) {
            User::create($item);
        }
    }
}
