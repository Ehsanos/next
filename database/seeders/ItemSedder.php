<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=10;$i++)
        DB::table('items')->insert([
            'product_id'=>rand(1,8),
            'order_id'=>rand(1,10),
            'quantity'=>rand(1,4),
            'discount'=>rand(0,90),
            'total'=>rand(10,50),

        ]);
    }
}
