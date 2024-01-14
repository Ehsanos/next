<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=2;$i<=10;$i++)

            $product=Product::create([
           'name'=>Str::random(5) ,
           'department_id'=>rand(1,10) ,
           'price'=>rand(1,150) ,
           'is_active'=> rand(0,1),
           'color'=>fake()->hexColor() ,
           'description'=>Str::random(20),

        ]);
    }
}
