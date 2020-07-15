<?php

use App\Models\Filiere;
use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = Program::all();
        $filieres = Filiere::all();
        foreach($programs as $program) {
            $program->slug = Str::slug($program->libele);
            $program->save();
        }
        foreach($filieres as $filiere) {
            if($filiere->id === 2) {
                $filiere->id = 3;
            }
            $filiere->slug = Str::slug($filiere->libele);
            $filiere->save();
        }
    }
}
