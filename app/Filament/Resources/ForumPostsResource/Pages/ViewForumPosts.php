<?php

namespace App\Filament\Resources\ForumPostsResource\Pages;

use App\Filament\Resources\ForumPostsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewForumPosts extends ViewRecord
{
    protected static string $resource = ForumPostsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
