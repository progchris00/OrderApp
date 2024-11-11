<?php

namespace App\Filament\Employee\Resources\OrderResource\Pages;

use App\Filament\Employee\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;
}
