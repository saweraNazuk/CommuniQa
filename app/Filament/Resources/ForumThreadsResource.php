<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ForumThreadsResource\Pages;
use App\Filament\Resources\ForumThreadsResource\RelationManagers;
use App\Models\ForumThreads;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ForumThreadsResource extends Resource
{
    protected static ?string $model = ForumThreads::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('category_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('author_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('pinned'),
                Forms\Components\Toggle::make('locked'),
                Forms\Components\TextInput::make('first_post_id')
                    ->numeric(),
                Forms\Components\TextInput::make('last_post_id')
                    ->numeric(),
                Forms\Components\TextInput::make('reply_count')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('author_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('pinned')
                    ->boolean(),
                Tables\Columns\IconColumn::make('locked')
                    ->boolean(),
                Tables\Columns\TextColumn::make('first_post_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('last_post_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('reply_count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListForumThreads::route('/'),
            'create' => Pages\CreateForumThreads::route('/create'),
            'view' => Pages\ViewForumThreads::route('/{record}'),
            'edit' => Pages\EditForumThreads::route('/{record}/edit'),
        ];
    }
}
