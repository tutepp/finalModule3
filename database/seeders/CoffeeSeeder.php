<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Seeder;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coffee = new Coffee();
        $coffee->id = 1;
        $coffee->name = 'Coffee Cot Dua';
        $coffee->image = 'img/product/product-1.jpg';
        $coffee->price = '50000';
        $coffee->description = '';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->id = 2;
        $coffee->name = 'Coffe Den';
        $coffee->image = 'img/product/product-2.jpg';
        $coffee->price = '20000';
        $coffee->description = '';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->id = 3;
        $coffee->name = 'Coffe Sua';
        $coffee->image = 'img/product/product-3.jpg';
        $coffee->price = '20000';
        $coffee->description = '';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->id = 4;
        $coffee->name = 'Capuchino';
        $coffee->image = 'img/product/product-4.jpg';
        $coffee->price = '30000';
        $coffee->description = '';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->id = 5;
        $coffee->name = 'Nuoc chanh';
        $coffee->image = 'img/product/product-5.jpg';
        $coffee->price = '10000';
        $coffee->description = '';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->id = 6;
        $coffee->name = 'Nuoc ep tao';
        $coffee->image = 'img/product/product-6.jpg';
        $coffee->price = '30000';
        $coffee->description = '';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->id = 7;
        $coffee->name = 'Nuoc Cam';
        $coffee->image = 'img/product/product-6.jpg';
        $coffee->price = '30000';
        $coffee->description = '';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->id = 8;
        $coffee->name = 'Bac Suu';
        $coffee->image = 'img/product/product-7.jpg';
        $coffee->price = '20000';
        $coffee->description = '';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->id = 9;
        $coffee->name = 'Sinh to bo';
        $coffee->image = 'img/product/product-8.jpg';
        $coffee->price = '35000';
        $coffee->description = '';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->id = 10;
        $coffee->name = 'Sinh to Mang Cau ';
        $coffee->image = 'img/product/product-9.jpg';
        $coffee->price = '35000';
        $coffee->description = '';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->id = 11;
        $coffee->name = 'Kakao da nong';
        $coffee->image = 'img/product/product-10.jpg';
        $coffee->price = '30000';
        $coffee->description = '';
        $coffee->save();


    }
}
