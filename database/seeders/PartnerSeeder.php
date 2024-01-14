<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Partner;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=2;$i<=10;$i++)

            $product=Partner::create([
                'name_ar'=>Str::random(5) ,


            ]);
    }
}
