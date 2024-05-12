<?php

namespace App\Filament\Resources\ForumCategoriesResource\Pages;

use App\Filament\Resources\ForumCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditForumCategories extends EditRecord
{
    protected static string $resource = ForumCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
