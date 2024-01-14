<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use App\Filament\Resources\DepartmentResource;
use App\Models\Category;
use App\Models\Department;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;
    protected function callHook(string $hook): void
    {

        //        if ($hook == "beforValidate") {
//            $category = Category::all();
//            if ($category->isEmpty()){
//                Notification::make("TEST")->success();
//            }
//        }
        if ( $hook !="afterFill"){
          if (Category::all()->isEmpty()){
              Notification::make()->warning()->title('لا يوجد فئات عامة ')->send();
          }
        }
    }

    protected function handleRecordCreation(array $data): Model
    {

        $depar = Department::create(collect($data)->except('tags')->toArray());
        foreach ($data['tags'] as $tag) {
            $depar->tags()->create([
                'name'=>$tag

            ]);
        }
        return $depar;

    }

}
