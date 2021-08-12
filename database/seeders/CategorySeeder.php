<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = ['html','css','javascript','php','python'];

        foreach($list as $i){
            \App\Models\category::create([
                'name' => $i,
                'description' => 'this is a simple category just for testing my skills',
                'thumbnail' => 'storage/category.jpg'
            ]);
        }
       
    }
}
