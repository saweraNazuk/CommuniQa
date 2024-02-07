<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedBackResource\Pages;
use App\Filament\Resources\FeedBackResource\RelationManagers;
use App\Models\FeedBack;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedBackResource extends Resource
{
    protected static ?string $model = FeedBack::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user.name'),
               MarkdownEditor ::make('feedback'),
                Select::make('user_id')
                ->relationship('User','name')->searchable(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable()->toggleable(isToggledHiddenByDefault:true),
                TextColumn::make('user.id')->label('user id'),
                TextColumn::make('feedback'),
                TextColumn::make('created_at')
                ->label('feedback on')
                ->dateTime()
                ->searchable()
                ->sortable()
                ->toggleable()
                
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
            'index' => Pages\ListFeedBacks::route('/'),
            'create' => Pages\CreateFeedBack::route('/create'),
            'edit' => Pages\EditFeedBack::route('/{record}/edit'),
        ];
    }
}
