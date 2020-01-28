<?php

use App\Admin;
use App\Models\Info;
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

        // Seed des infos concernant BBC ( address, BP, phone)

        Info::create([
            'phone' => "33 779 90 87",
            'address' => "Mermoz",
            'email' => "administration@bbcsn.com",
            'bp' => "Boite"
        ]);

        // Seed des parteners

        // Seed du compte d'administrateur
        Admin::create([
            'name' => "Administrateur",
            'email' => "administration@bbcsn.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
