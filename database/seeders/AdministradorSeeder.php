<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = "administrador123";
        $user = new User([
            "email" => "administrador",
            "password" => "administrador",
            "name" => "administrador",
        ]);
        users->saveOrFail();
    }
}
