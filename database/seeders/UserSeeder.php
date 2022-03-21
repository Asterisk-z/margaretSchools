<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'registration_number' => 'admin01',
            'department' => 'admin',
            'faculty' => 'admin',
            'gender' => 'admin',
            'sessionOfEnrolement' => 'admin',
            'dob' => now(),
            'temp_password' => 'NO',
            'mobileNumber' => '123456789',
        ]);
        User::create([
            'name' =>'Student',
            'email' => 'student@gmail.com',
            'role' => 'student',
            'password' => Hash::make('123456'),
            'registration_number' => 'student000001',
            'department' => 'student',
            'faculty' => 'student',
            'gender' => 'student',
            'sessionOfEnrolement' => '2021/2022',
            'dob' => now(),
            'temp_password' => 'NO',
            'mobileNumber' => '123456789',
        ]);

        User::factory(10)->create();
    }
}
