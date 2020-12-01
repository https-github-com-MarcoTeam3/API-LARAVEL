<?php

use App\Products;
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
        $products= new \App\Products();
        $products->title = "Apple Watch";
        $products->price = 399;
        $products->description = "Connected Watch";
        $products->pro_photo = "apple2.png";
        $products->category_id = "5";
        $products->user_id = "1";
        $products->save();

        
    }
}
