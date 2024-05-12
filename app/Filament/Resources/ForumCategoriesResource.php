<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ForumCategoriesResource\Pages;
use App\Filament\Resources\ForumCategoriesResource\RelationManagers;
use App\Models\ForumCategories;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ForumCategoriesResource extends Resource
{
    protected static ?string $model = ForumCategories::class;

    protected static ?string $navigationIcon = 'heroicon-o-funnel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255),
                Forms\Components\Toggle::make('accepts_threads')
                    ->required(),
                Forms\Components\TextInput::make('newest_thread_id')
                    ->numeric(),
                Forms\Components\TextInput::make('latest_active_thread_id')
                    ->numeric(),
                Forms\Components\TextInput::make('thread_count')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('post_count')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('is_private')
                    ->required(),
                Forms\Components\TextInput::make('_lft')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('_rgt')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('parent_id')
                    ->numeric(),
                Forms\Components\TextInput::make('color')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\IconColumn::make('accepts_threads')
                    ->boolean(),
                Tables\Columns\TextColumn::make('newest_thread_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('latest_active_thread_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('thread_count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('post_count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_private')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('_lft')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('_rgt')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('parent_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('color')
                    ->searchable(),
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
            'index' => Pages\ListForumCategories::route('/'),
            'create' => Pages\CreateForumCategories::route('/create'),
            'view' => Pages\ViewForumCategories::route('/{record}'),
            'edit' => Pages\EditForumCategories::route('/{record}/edit'),
        ];
    }
}
