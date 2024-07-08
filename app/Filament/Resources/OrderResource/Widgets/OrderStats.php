<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use Filament\Forms\Components\Tabs\Tab;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
//use Filament\Widgets\StatsOverviewwidget\Order;
use App\Models\Order;
use Illuminate\Support\Number;



class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
           Stat::make('New Orders',Order::query()->where('status','new')->count()),
           Stat::make('Processing',Order::query()->where('status','processing')->count()),
           Stat::make('Order Shipped',Order::query()->where('status','shipped')->count()),

           Stat::make('Average Price',Number::currency(Order::query()->avg('grand_total'),'EUR'))



        ];
    }

   


}
