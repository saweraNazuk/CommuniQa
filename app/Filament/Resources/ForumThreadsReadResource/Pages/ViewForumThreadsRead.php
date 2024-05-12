<?php

namespace App\Filament\Resources\ForumThreadsReadResource\Pages;

use App\Filament\Resources\ForumThreadsReadResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewForumThreadsRead extends ViewRecord
{
    protected static string $resource = ForumThreadsReadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
