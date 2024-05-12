<?php

namespace App\Filament\Resources\ForumPostsResource\Pages;

use App\Filament\Resources\ForumPostsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditForumPosts extends EditRecord
{
    protected static string $resource = ForumPostsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
