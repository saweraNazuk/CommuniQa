<?php

namespace App\Filament\Resources\ChFavoriteResource\Pages;

use App\Filament\Resources\ChFavoriteResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewChFavorite extends ViewRecord
{
    protected static string $resource = ChFavoriteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
