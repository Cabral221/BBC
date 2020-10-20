<?php

use App\Models\Modal;
use Illuminate\Database\Seeder;

class ModalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Modal Of welcome
        Modal::create([
            'title' => '',
            'content' => '',
            'is_active' => false
        ]);

    }
}
