<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Biraj Shrestha',
            'email' => 'birajshrestha51@gmail.com',
            'role_id' => '1',
            'password' => Hash::make('biraj123'),
        ]);
    }
}
