<?php

namespace Database\Seeders;

use App\Enums\OrderStatusEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=2;$i<20;$i++)
        DB::table('orders')->insert([
            'user_id'=>rand(1,9),
            'order_code'=>Str::random(5),
            'discount'=>rand(0,90),
            'status'=>OrderStatusEnum::Wait->value,
            'result'=>rand(10,50),
            'total'=>rand(10,50),
        ]);

    }
}
