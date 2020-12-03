<?php

use App\Category;
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
        $category= new \App\Category();
        $category->name = "Men";
        $category->save();

        $category= new \App\Category();
        $category->name = "Women";
        $category->save();

        $category= new \App\Category();
        $category->name = "Connected";
        $category->save();

        $category= new \App\Category();
        $category->name = "Classic";
        $category->save();
    }    
}
