<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'admin',
            ],
            [
                'name' => 'user',
            ],
            [
                'name' => 'agent',
            ],
            [
                'name' => 'member',
            ],
            [
                'name' => 'trainer',
            ],
            [
                'name' => 'student',
            ],


        ]);
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'username' => 'admin_user',
                'phone' => '1234567890',
                'role_id' => Role::where('name', 'admin')->first()->id,
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Regular User',
                'username' => 'regular_user',
                'phone' => '1234567891',
                'role_id' => Role::where('name', 'user')->first()->id,
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Agent User',
                'username' => 'agent_user',
                'phone' => '1234567892',
                'role_id' => Role::where('name', 'agent')->first()->id,
                'email' => 'agent@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Mahfuzul Islam',
                'username' => 'mahfuzul1125',
                'phone' => '1234567893',
                'role_id' => Role::where('name', 'admin')->first()->id,
                'email' => 'mahfuzul1125@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Trainer User',
                'username' => 'trainer_user',
                'phone' => '1234567894',
                'role_id' => Role::where('name', 'trainer')->first()->id,
                'email' => 'trainer@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Member User',
                'username' => 'member_user',
                'phone' => '1234567895',
                'role_id' => Role::where('name', 'member')->first()->id,
                'email' => 'member@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Student User',
                'username' => 'student_user',
                'phone' => '1234567895',
                'role_id' => Role::where('name', 'student')->first()->id,
                'email' => 'student@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
