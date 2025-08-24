<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\Estudante;
use App\Models\Secao;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $emails = ['alvaro220592@gmail.com', 're079@gmail.com'];

        foreach($emails as $email){
            if (!User::where('email', $email)->exists()) {
                User::factory()->create([
                    'name' => explode('@', $email)[0],
                    'email' => $email,
                ]);
            }
        }

        Classe::factory()->count(4)->create();
        Secao::factory()->count(28)->create();
        Estudante::factory()->count(100)->create();
    }
}
