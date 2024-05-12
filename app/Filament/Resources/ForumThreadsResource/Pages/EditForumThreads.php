<?php

namespace App\Filament\Resources\ForumThreadsResource\Pages;

use App\Filament\Resources\ForumThreadsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditForumThreads extends EditRecord
{
    protected static string $resource = ForumThreadsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
