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
        //1
        $products= new \App\Products();
        $products->title = "Apple Silver Chain";
        $products->price = 599;
        $products->description = "Apple Mens tactile connected watch";
        $products->pro_photo = "mens-connected.png";
        $products->category_id = "3";
        $products->user_id = "1";
        $products->save();

        //2
        $products= new \App\Products();
        $products->title = "Garmin Black";
        $products->price = 699;
        $products->description = "Gamin Mens tactile connected watch";
        $products->pro_photo = "mens-connected-2.png";
        $products->category_id = "3";
        $products->user_id = "1";
        $products->save();

        //3
        $products= new \App\Products();
        $products->title = "Cluse Gold";
        $products->price = 899;
        $products->description = "Cluse solid Gold collectors watch";
        $products->pro_photo = "mens-gold.png";
        $products->category_id = "4";
        $products->user_id = "2";
        $products->save();

        //4
        $products= new \App\Products();
        $products->title = "Hugo Boss Classic";
        $products->price = 499;
        $products->description = "Hugo boss watch with leather band and gold finishing";
        $products->pro_photo = "mens-leather.png";
        $products->category_id = "3";
        $products->user_id = "1";
        $products->save();

        //5
        $products= new \App\Products();
        $products->title = "Ice Red";
        $products->price = 399;
        $products->description = "Trendy design with eye catching color";
        $products->pro_photo = "mens-red.png";
        $products->category_id = "1";
        $products->user_id = "3";
        $products->save();

        //6
        $products= new \App\Products();
        $products->title = "Festina Silver";
        $products->price = 799;
        $products->description = "Festina's pure silver watch with black fasade";
        $products->pro_photo = "mens-silver-black.png";
        $products->category_id = "1";
        $products->user_id = "3";
        $products->save();

        //7
        $products= new \App\Products();
        $products->title = "Rolex Gold";
        $products->price = 13000;
        $products->description = "Rolex pure gold watch with emerald fasade. Hand crafted in England";
        $products->pro_photo = "rolex-gold.png";
        $products->category_id = "1";
        $products->user_id = "1";
        $products->save();

        //8
        $products= new \App\Products();
        $products->title = "Womens Ice pink";
        $products->price = 1299;
        $products->description = "Lovely pink leather watch with dimand encrusting";
        $products->pro_photo = "womens-ice-pink.png";
        $products->category_id = "2";
        $products->user_id = "4";
        $products->save();

        //9
        $products= new \App\Products();
        $products->title = "Womens Fossil Classic";
        $products->price = 799;
        $products->description = "Classic womens fossil watch made with genuine texas longhorn leather";
        $products->pro_photo = "womens-leather.png";
        $products->category_id = "2";
        $products->user_id = "3";
        $products->save();

        //10
        $products= new \App\Products();
        $products->title = "Lacoste Pink & Gold";
        $products->price = 899;
        $products->description = "Stylish pink watch with gold finishing";
        $products->pro_photo = "womens-pink.png";
        $products->category_id = "2";
        $products->user_id = "2";
        $products->save();

        //11
        $products= new \App\Products();
        $products->title = "Womens Festina Silver ";
        $products->price = 599;
        $products->description = "Solid silver womens watch with blue fasade and 24k diamond encrustating";
        $products->pro_photo = "womens-silver-blue.png";
        $products->category_id = "2";
        $products->user_id = "4";
        $products->save();



        
    }
}
