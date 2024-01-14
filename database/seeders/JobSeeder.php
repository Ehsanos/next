<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=2;$i<=10;$i++)

            $product=Job::create([
                'name'=>Str::random(5) ,
                'phone'=>Str::random(5) ,
                'email'=>Str::random(5).'@gmail.com' ,
                'address'=>$faker->paragraph(4) ,
                'section'=>Str::random(5) ,
                'details'=>$faker->sentence(5) ,


            ]);
    }
}
