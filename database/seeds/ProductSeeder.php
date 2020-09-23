<?php

use App\Product;
use App\Brand;
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
        $brand = Brand::create([
            'name' => 'Nike',
            'description' => 'Sportswear',
            'link' => 'https://www.nike.com'
        ]);

        Product::create([
            'name' => 'Product 1',
            'price' => 334,
            'reference' => 234234,
            'brand_id' => $brand->id,
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => 274,
            'reference' => 234234,
            'brand_id' => $brand->id,
        ]);
		
		Product::create([
            'name' => 'Product 3',
            'price' => 1234,
            'reference' => 234234,
            'brand_id' => $brand->id,
        ]);
		
		Product::create([
            'name' => 'Product 4',
            'price' => 200,
            'reference' => 234234,
            'brand_id' => $brand->id,
        ]);
		
		Product::create([
            'name' => 'Product 5',
            'price' => 834,
            'reference' => 234234,
            'brand_id' => $brand->id,
        ]);
		
		Product::create([
            'name' => 'Product 6',
            'price' => 434,
            'reference' => 234234,
            'brand_id' => $brand->id,
        ]);
    }
}
