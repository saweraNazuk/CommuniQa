<?php

namespace App\Filament\Resources\ChMessageResource\Pages;

use App\Filament\Resources\ChMessageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewChMessage extends ViewRecord
{
    protected static string $resource = ChMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
