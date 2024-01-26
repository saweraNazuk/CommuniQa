<?php

namespace App\Filament\Resources\ProfilesResource\Pages;

use App\Filament\Resources\ProfilesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfiles extends EditRecord
{
    protected static string $resource = ProfilesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
