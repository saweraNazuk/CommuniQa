<?php

namespace App\Filament\Resources\ForumPostsResource\Pages;

use App\Filament\Resources\ForumPostsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListForumPosts extends ListRecords
{
    protected static string $resource = ForumPostsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
