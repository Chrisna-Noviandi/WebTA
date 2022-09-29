<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'chrisna',
            'username' => '31119008',
            'password' => bcrypt(123456),
            'type' => 'Admin',
            'status' => 'new',

        ]);

        User::create([
            'name' => 'Budi Santoso',
            'username' => '31119001',
            'password' => bcrypt(123456),
            'type' => 'Wakil Prodi',
            'status' => 'new',

        ]);

        User::create([
            'name' => 'Christian Alexsander',
            'username' => '31119003',
            'password' => bcrypt(123456),
            'type' => 'Pemimpin',
            'status' => 'new',

        ]);

        User::create([
            'name' => 'Sugiono Andreas',
            'username' => '31119002',
            'password' => bcrypt(123456),
            'type' => 'Acesor',
            'status' => 'new',

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
