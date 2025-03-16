<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'last_name' => 'Ugochukwu',
            'first_name' => 'Solomon',
            'other_name' => 'Njideofor',
            'gender' => 'male',
            'phone_number' => '+243991471304',
            'user_type' => RoleEnum::SuperAdministrator,
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'last_name' => 'Afen',
            'first_name' => 'Blessing',
            'other_name' => null,
            'gender' => 'female',
            'phone_number' => '07016682945',
            'user_type' => RoleEnum::Administrator,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            ]);

        User::create([
            'last_name' => 'Isaiah',
            'first_name' => 'Johnson',
            'other_name' => 'Olamide',
            'gender' => 'male',
            'phone_number' => '08024004029',
            'user_type' => RoleEnum::Staff,
            'email' => 'lecturer@gmail.com',
            'password' => bcrypt('123456'),
            ]);

    }
}
