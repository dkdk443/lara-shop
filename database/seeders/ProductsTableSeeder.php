<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Factory as CarbonFactory;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(Product::class, 100)->create();
    }
}
