<?php

namespace App\Filament\Resources\ChFavoriteResource\Pages;

use App\Filament\Resources\ChFavoriteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChFavorite extends EditRecord
{
    protected static string $resource = ChFavoriteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
