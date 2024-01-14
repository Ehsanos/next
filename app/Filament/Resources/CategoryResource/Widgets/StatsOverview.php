<?php

namespace App\Filament\Resources\CategoryResource\Widgets;

use App\Models\Category;
use App\Models\Department;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $cat=Category::all()->count();
        $depart=Department::all()->count();
        $product=Product::all()->count();
        return [
            Card::make('عدد الفئات', $cat)->description('32k increase')
                ->descriptionIcon('heroicon-s-chart-pie')->color('success'),
            Card::make('عدد الأقسام', $depart)->description('32k increase')
                ->descriptionIcon('heroicon-s-shopping-bag')->color('success'),
            Card::make('عدد المنتجات', $product)->description('32 increase')
                ->descriptionIcon('heroicon-s-cube')->color('success'),
        ];
    }
}
