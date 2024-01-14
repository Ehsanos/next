<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i <= 10; $i++)
            DB::table('departments')->insert([
                'name' => Str::random(5),
                'is_active' => rand(0, 1),
                'description' => Str::random(10),
                'category_id' =>rand(1,10),
            ]);
    }
}
