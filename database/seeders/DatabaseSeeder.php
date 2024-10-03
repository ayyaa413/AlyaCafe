<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::create([
            'name' => 'yaya',
            'email' => 'yaya@gmail.com',
            'password' => bcrypt ('123456')
        ]);

        User::create([
            'name' => 'Alya',
            'email' => 'alya@gmail.com',
            'password' => bcrypt ('1234')
        ]);

        // User::create([
        //     'name' => 'yaya',
        //     'email' => 'yaya@gmail.com',
        //     'password' => bcrypt('1234'),
        //     'is_admin' =>true,
        // ]);
}
}
