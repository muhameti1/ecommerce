<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use Filament\Forms\Components\Tabs\Tab;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //Stat::make('New Orders',Order::query()->where('status','new')->count())
        ];
    }

   


}
