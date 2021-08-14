<?php

namespace Database\Seeders;

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
        $list = ['android','iphone','laptop','computer','keyboard'];

        foreach($list as $i){
            \App\Models\product::create([
                'name' => $i,
                'weight' => random_int(20,2000),
                'price' => random_int(200,2000),
                'sku' => 'sku',
                'stock' => random_int(5,90),
                'category_id' => random_int(1,4),
                'description' => 'this is a simple prodcut just for testing my skills. this is my new product i call at' . $i,
                'image' => 'storage/category.jpg',
                'thumbnail' => 'storage/category.jpg'
            ]);
    }
}
}
