<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
 
    	for($i = 1; $i <= 4; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('products')->insert([
    			'product_name' =>  $faker->randomElement(['nama gelang', 'masker']),
    			'description' => $faker->paragraph,
    			'image' => $faker->imageUrl('https://images.app.goo.gl/YV53jiR43gFXsTKC7'),
    			'type' => $faker->randomElement(['Gelang', 'Masker']),
    			'price' => $faker->numberBetween(10000,400000),
    		]);
        }
    }
}