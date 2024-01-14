<?php

namespace App\Filament\Resources\UserResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class UserStatsOverview extends BaseWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 1,
    ];

    protected function getCards(): array
    {
        $user=\App\Models\User::all()->count();
        return [
           Card::make('عدد المسخدمين',$user)->description(' بتزايد 5')
               ->descriptionIcon('heroicon-s-user')->color('primary')->chart([1,3,3,3,5,6,7,10])->extraAttributes(
                   [
                       'class'=>'cursor-pointer',
                   ]
               ),
        ];
    }
}
