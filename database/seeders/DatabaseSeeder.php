<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();
        $this->call(EditionsSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(PraticalInfosSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(SalesSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(ExposantSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(ExposantsTagsSeeder::class);
    }
}
