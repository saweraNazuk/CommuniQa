<?php

namespace App\Filament\Resources\ForumThreadsReadResource\Pages;

use App\Filament\Resources\ForumThreadsReadResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditForumThreadsRead extends EditRecord
{
    protected static string $resource = ForumThreadsReadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
