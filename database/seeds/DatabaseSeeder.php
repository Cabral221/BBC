<?php

use App\Admin;
use App\Models\Info;
use App\Models\Team;
use App\Models\Word;
use App\Models\Slide;
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
        // $this->call(UsersTableSeeder::class);

        // Seed du premier image comme slide
        Slide::create([
            'image' => '/default-slide.jpg'
        ]);

        // Seed du directeur des programs
        Team::create([
            'lastname' => 'Baldé',
            'firstname' => 'Mrs',
            'job' => 'Director of Program',
            'image' => '/default.jpg'
        ]);

        // Seed du mot de bienvenue
        Word::create([
            'content' => 'Ceci est un texte obtenu a partir du seed des donnes',
            'team_id' => 1,
        ]);

        // Seed des infos concernant BBC ( address, BP, phone)
        Info::create([
            'phone' => "+221 33 869 25 00",
            'address' => "Dakar Mermoz",
            'email' => "info@bbcsn.com",
            'bp' => "21784"
        ]);

        // Seed du compte d'administrateur
        Admin::create([
            'name' => "Administrateur",
            'email' => "infos@bbcsn.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
