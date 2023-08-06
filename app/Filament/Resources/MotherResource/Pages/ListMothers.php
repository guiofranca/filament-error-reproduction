<?php

namespace App\Filament\Resources\MotherResource\Pages;

use App\Filament\Resources\MotherResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMothers extends ListRecords
{
    protected static string $resource = MotherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
