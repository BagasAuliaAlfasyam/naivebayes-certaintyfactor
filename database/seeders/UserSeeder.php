<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => '1',
            'name' => 'Bagas Aulia Alfasyam',
            'username' => 'Bagason',
            'email' => 'hi@bagas.com',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'role_id' => '1',
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'Bagas Aulia Alfasyam',
            'username' => 'BagasonUser',
            'email' => 'bagas@gmail.com',
            'password' => bcrypt('user'),
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'UserUser',
            'username' => 'useruser',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
        ]);
    }
}
