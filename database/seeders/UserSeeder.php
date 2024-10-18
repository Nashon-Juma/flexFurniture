<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function run(): void
    {
        DB::table('users')->insert([

            [
                'username' => 'phong',
                'email' => 'nashon@techmates.team',
                'phone_number' => 0321565465,
                'address' => 'TanLap2',
                'password' => static::$password ??= Hash::make('password'),
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'phong',
                'email' => 'phong@gmail.com',
                'phone_number' => 0321565465,
                'address' => 'TanLap2',
                'password' => static::$password ??= Hash::make('password'),
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'OWNER',
                'email' => 'owner@gmail.com',
                'phone_number' => 0321565465,
                'address' => 'TanLap2',
                'password' => static::$password ??= Hash::make('password'),
                'role_id' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
