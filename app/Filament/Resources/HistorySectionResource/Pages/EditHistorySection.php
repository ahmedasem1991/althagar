<?php

namespace App\Filament\Resources\HistorySectionResource\Pages;

use App\Filament\Resources\HistorySectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistorySection extends EditRecord
{
    protected static string $resource = HistorySectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
