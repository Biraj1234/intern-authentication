<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            0 => [
                'name' => 'Admin Bahadur',
                'email' => 'admin@gmail.com',
                'role_id' => '1',
                'password' => Hash::make('admin123'),
            ],
            1 => [
                'name' => 'Guest Bahadur',
                'email' => 'guest@gmail.com',
                'role_id' => '2',
                'password' => Hash::make('guest123'),
            ],
        ]);
    }
}
