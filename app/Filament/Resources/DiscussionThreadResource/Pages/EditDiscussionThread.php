<?php

namespace App\Filament\Resources\DiscussionThreadResource\Pages;

use App\Filament\Resources\DiscussionThreadResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiscussionThread extends EditRecord
{
    protected static string $resource = DiscussionThreadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
