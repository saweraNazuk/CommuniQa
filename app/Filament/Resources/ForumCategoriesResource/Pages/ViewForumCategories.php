<?php

namespace App\Filament\Resources\ForumCategoriesResource\Pages;

use App\Filament\Resources\ForumCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewForumCategories extends ViewRecord
{
    protected static string $resource = ForumCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
