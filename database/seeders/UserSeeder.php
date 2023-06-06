<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'nameortu' => 'Jane Doe',
                'birthday' => '2000-01-01',
                'phone' => '123456789',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Doe',
                'nameortu' => 'Jane Doe',
                'birthday' => '2000-01-01',
                'phone' => '123456789',
                'email' => 'john@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'nameortu' => 'John Smith',
                'birthday' => '2002-02-02',
                'phone' => '987654321',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'David Johnson',
                'nameortu' => 'Sarah Johnson',
                'birthday' => '1999-03-03',
                'phone' => '555555555',
                'email' => 'david@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
