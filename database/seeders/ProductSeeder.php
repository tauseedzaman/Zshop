<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (product::count() == 0) {
            product::factory(100)->create();
        }
    }
}
