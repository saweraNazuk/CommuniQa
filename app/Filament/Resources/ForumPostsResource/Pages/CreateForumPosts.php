<?php

namespace App\Filament\Resources\ForumPostsResource\Pages;

use App\Filament\Resources\ForumPostsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateForumPosts extends CreateRecord
{
    protected static string $resource = ForumPostsResource::class;
}
