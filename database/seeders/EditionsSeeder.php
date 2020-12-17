<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Editions;
use Illuminate\Database\Seeder;

class EditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Editions::factory()->count(10)->create();
    }
}
