<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'admin',
            'last_name' => '1',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123'),
            'is_admin' => true
        ]);
        // ,[
        //     'first_name' => 'heru',
        //     'last_name' => 'rafki',
        //     'email' => 'herurafki11@gmail.com',
        //     'password' => bcrypt('123'),
        //     'is_admin' => false
        // ],[
        //     'first_name' => 'raja',
        //     'last_name' => 'emon',
        //     'email' => 'rajaemon@gmail.com',
        //     'password' => bcrypt('123'),
        //     'is_admin' => false
        // ]);
    }
}
