<?php

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

    	//seeding testing 
        DB::table('products')->insert([
            'name' => 'Phone one',
            'slug' => 'Phone one',
            'description' => 'description goes here......',
            'price' => 39900.99,
            'image' => '1.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Xbox One',
            'slug' => 'xbox-one',
            'description' => 'description goes here......',
            'price' => 449000.99,
            'image' => '2.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Apple Macbook Pro',
            'slug' => 'macbook-pro',
            'description' => 'description goes here',
            'price' => 2299000.99,
            'image' => '3.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Apple iPad Retina',
            'slug' => 'ipad-retina',
            'description' => 'description goes here',
            'price' => 799000.99,
            'image' => '4.jpg',
        ]);

        

        DB::table('products')->insert([
            'name' => 'Headphones',
            'slug' => 'headphones',
            'description' => 'description goes here',
            'price' => 99.99,
            'image' => '5.jpg',
        ]);

 
    }
}
