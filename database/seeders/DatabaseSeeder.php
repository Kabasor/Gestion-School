<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     "matricule" =>"A123",
        //     "nom" => "Kaba",
        //     "prenom" => "sory",
        //     "email" => "admin@gmail.com",
        //     "telephone" => "628786036",
        //     "fonction" => "programeur",
        //     "role" => "administrateur",
        //     "diplome" =>"",
        //     // "date_naissance" =>"date",
        //     "lieu_naissance" =>"",
        //     "biographie" =>"",
        //     "adresse" =>"",
        //     "sexe" =>"",
        //     "photo" =>"",
        //     // "salaire" =>"",
        //     // "active" =>1,
        //     "password" => Hash::make(12345678),
        // ]);
    }
}
