<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $this->call(PraticalInfosSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(RandomImageOfGourmetSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ExposantSeeder::class);
    }
}
