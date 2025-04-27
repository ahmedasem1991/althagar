<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistorySectionResource\Pages;
use App\Filament\Resources\HistorySectionResource\RelationManagers;
use App\Models\HistorySection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class HistorySectionResource extends Resource
{
    protected static ?string $model = HistorySection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('background_1')
                    ->label('Background Image')
                    ->image()
                    ->directory('history')
                    ->disk('public'),

                TextInput::make('history_header')
                    ->label('History Header')
                    ->required(),

                TextInput::make('history_slogan')
                    ->label('History Slogan')
                    ->required(),

                Textarea::make('history_description')
                    ->label('History Description')
                    ->rows(6)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('history_header')->limit(30),
                TextColumn::make('history_slogan')->limit(30),
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
            'index' => Pages\ListHistorySections::route('/'),
            'create' => Pages\CreateHistorySection::route('/create'),
            'edit' => Pages\EditHistorySection::route('/{record}/edit'),
        ];
    }
}
