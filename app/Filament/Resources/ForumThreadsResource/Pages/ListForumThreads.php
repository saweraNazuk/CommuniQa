<?php

namespace App\Filament\Resources\ForumThreadsResource\Pages;

use App\Filament\Resources\ForumThreadsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListForumThreads extends ListRecords
{
    protected static string $resource = ForumThreadsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
