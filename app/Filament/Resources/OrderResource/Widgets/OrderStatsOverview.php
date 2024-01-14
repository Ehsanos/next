<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class OrderStatsOverview extends BaseWidget
{
    protected int | string | array $columnSpan = [
        'md' => 1,
        'xl' => 1,
    ];
    protected function getCards(): array
    {
        $orders=Order::all()->count();
        return [
            Card::make('عدد الطلبات',$orders)->description('32k increase')
                ->descriptionIcon('heroicon-s-shopping-cart')->color('danger')->chart([7, 2, 10, 3, 15, 4, 17])->extraAttributes(
                    [
                        'class' => 'w-80',
                        'width'=>'20%'

                    ]
                )
        ];
    }
}
