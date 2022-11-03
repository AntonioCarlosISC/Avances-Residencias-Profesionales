<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $contraseña = "administrador123";
        \App\Models\User::factory()->create([
             'name' => 'administrador',
             'email' => 'administrador',
             't_user' => 'administrador',
             'password' => Hash::make($contraseña)
         ]);
    }
}
