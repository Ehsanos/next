<?php

namespace Database\Seeders;

use App\Enums\UserTypeEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=\App\Models\User::create([
           'name'=>'ahmad',
           'email'=>'admin@admin.com',
           'password'=>Hash::make('12345678'),
            'type'=>UserTypeEnum::Admin->value
       ]);

        $role=Role::create([
            'name'=>'super_admin',
            'guard_name'=>'web',
        ]);
        $permissions=Permission::all()->pluck('id');
        $role->permissions()->sync($permissions);
        $admin->roles()->sync($role->id);

        for($i=2;$i<20;$i++)
        $user=User::create([
            'name'=>Str::random(4),
           'email'=>Str::random(4).'@gmail.com',
           'password'=>Hash::make('12345678')
       ]);

    }
}
