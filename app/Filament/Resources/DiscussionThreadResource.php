<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiscussionThreadResource\Pages;
use App\Filament\Resources\DiscussionThreadResource\RelationManagers;
use App\Models\DiscussionThread;
use App\Models\Post;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\MorphToSelect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiscussionThreadResource extends Resource
{
    protected static ?string $model = DiscussionThread::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')->relationship('user','name')->searchable()->preload(),
                TextInput::make('content'),
                Select::make('user_id')
                ->relationship('User','name')->searchable(),
                MorphToSelect::make('commentable')
                ->label('comment type')
                ->types
                (
                      [
                    MorphToSelect\Type::make(Post::class)->titleAttribute('content'),
                    MorphToSelect\Type::make(User::class)->titleAttribute('name'),
                    MorphToSelect\Type::make(DiscussionThread::class)->titleAttribute('id'),
                       ]
                )
          ->searchable()
          ->preload()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable()->toggleable(isToggledHiddenByDefault:true),
                TextColumn::make('user.id')->label('user id'),
                TextColumn::make('user.name'),
                TextColumn::make('commentable_type')
                ->label('Commentable Type'),
                TextColumn::make('commentable_id'),
                TextColumn::make('content'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListDiscussionThreads::route('/'),
            'create' => Pages\CreateDiscussionThread::route('/create'),
            'edit' => Pages\EditDiscussionThread::route('/{record}/edit'),
        ];
    }
}
