<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;

class AdminWidgets extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Card::make('Total Users', Customer::count()),
        ];
    }
}
