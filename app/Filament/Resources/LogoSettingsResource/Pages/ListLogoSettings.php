<?php

namespace App\Filament\Resources\LogoSettingsResource\Pages;

use App\Filament\Resources\LogoSettingsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLogoSettings extends ListRecords
{
    protected static string $resource = LogoSettingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
