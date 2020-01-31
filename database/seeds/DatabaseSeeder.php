<?php

use App\Admin;
use App\Models\Info;
<<<<<<< HEAD
=======
use App\Models\Word;
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
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

<<<<<<< HEAD
        // Seed des infos concernant BBC ( address, BP, phone)

        Info::create([
            'phone' => "33 779 90 87",
=======
        // Seed du mot de bienvenue
        Word::create([
            'content' => 'Ceci est un texte obtenu a partir du seed des donnes',
            'team_id' => 1,
        ]);

        // Seed des infos concernant BBC ( address, BP, phone)
        Info::create([
            'phone' => "+221 33 869 25 00",
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
            'address' => "Mermoz",
            'email' => "administration@bbcsn.com",
            'bp' => "Boite"
        ]);

<<<<<<< HEAD
        // Seed des parteners

        // Seed du compte d'administrateur
        Admin::create([
            'name' => "Administrateur",
            'email' => "info@bbcsn.com",
=======
        // Seed du compte d'administrateur
        Admin::create([
            'name' => "Administrateur",
            'email' => "infos@bbcsn.com",
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
