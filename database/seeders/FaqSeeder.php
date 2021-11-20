<?php

namespace Database\Seeders;

use App\Models\faq;
use Database\Factories\faqFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (faq::count() == 0) {
            faq::factory(50)->create();
        }
    }
}
