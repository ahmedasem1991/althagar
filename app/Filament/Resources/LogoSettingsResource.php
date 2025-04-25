<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LogoSettingsResource\Pages;
use App\Filament\Resources\LogoSettingsResource\RelationManagers;
use App\Models\LogoSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;


class LogoSettingsResource extends Resource
{
    protected static ?string $model = LogoSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public static function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('header_logo')
                ->label('Header Logo')
                ->image()  // Ensure the uploaded file is an image
                ->disk('public')  // Choose the storage disk (e.g., 'public')
                ->directory('logos/headers')  // Define the directory to store the uploaded image
                ->nullable()  // Make it nullable, so it's not required
                ->helperText('Upload the image for the header logo.'),

            FileUpload::make('footer_logo')
                ->label('Footer Logo')
                ->image()  // Ensure the uploaded file is an image
                ->disk('public')  // Choose the storage disk (e.g., 'public')
                ->directory('logos/footers')  // Define the directory to store the uploaded image
                ->nullable()  // Make it nullable
                ->helperText('Upload the image for the footer logo.'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('header_logo')->label('Header Logo')->formatStateUsing(fn($state) => $state ? '<img src="' . asset('storage/' . $state) . '" alt="Header Logo" style="max-width: 100px;">' : '')->html(),
                TextColumn::make('footer_logo')->label('Footer Logo')->formatStateUsing(fn($state) => $state ? '<img src="' . asset('storage/' . $state) . '" alt="Footer Logo" style="max-width: 100px;">' : '')->html(),
            ])             // Enable HTML rendering in the table to display images
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
            'index' => Pages\ListLogoSettings::route('/'),
            'create' => Pages\CreateLogoSettings::route('/create'),
            'edit' => Pages\EditLogoSettings::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel(): string
    {
        return 'الاعدادات';
    }

    public static function getPluralModelLabel(): string
    {
        return 'الاعدادات';
    }
}
