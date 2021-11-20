<?php

namespace Database\Seeders;

use App\Models\aboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (aboutus::count() == 0) {
            aboutUs::factory()->create();
        }
    }
}
