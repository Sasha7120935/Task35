<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProductImage::class,10)->create();
        factory(\App\Product::class,5)->create()->each(function ($product){
            $product->galleryImages()->attach(\App\ProductImage::all()->random(5));
            $product->categories()->attach(\App\Category::all()->random(2));


        });
    }
}
