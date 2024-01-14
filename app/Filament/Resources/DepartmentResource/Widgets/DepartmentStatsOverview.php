<?php

namespace App\Filament\Resources\DepartmentResource\Widgets;

use App\Models\Department;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class DepartmentStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {

        $department=Department::all()->count();
        return [
            Card::make('عدد الأقسام',$department)
        ];
    }
}
