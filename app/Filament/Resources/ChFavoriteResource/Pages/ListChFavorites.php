<?php

namespace App\Filament\Resources\ChFavoriteResource\Pages;

use App\Filament\Resources\ChFavoriteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChFavorites extends ListRecords
{
    protected static string $resource = ChFavoriteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
