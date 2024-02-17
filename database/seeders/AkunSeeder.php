<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username' =>'admin',
                'password' => bcrypt('123456'),
                'fullname' =>'Admin 1',
                'position' =>'ADMINISTRATOR',
                'phone' => '081234567890',
                'address' => 'Jl. Raya No. 1, Jakarta',
                'date' => '1996-06-01',
                'created_by' => 'admin',
                'updated_by' => 'admin'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
