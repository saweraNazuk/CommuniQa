<?php

namespace App\Filament\Resources\DiscussionThreadResource\Pages;

use App\Filament\Resources\DiscussionThreadResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiscussionThreads extends ListRecords
{
    protected static string $resource = DiscussionThreadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
