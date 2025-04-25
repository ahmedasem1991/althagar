<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Pages\Page;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;

class SiteSettings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'Site Settings';
    protected static ?string $navigationGroup = 'Settings';
    protected static bool $shouldRegisterNavigation = true;

    protected static string $view = 'filament.pages.site-settings';

    public $header_logo;
    public $footer_logo;

    protected function getFormSchema(): array
    {
        return [
            FileUpload::make('header_logo')
                ->label('Header Logo')
                ->directory('site-settings')
                ->image()
                ->preserveFilenames()
                ->columnSpan('full'),

            FileUpload::make('footer_logo')
                ->label('Footer Logo')
                ->directory('site-settings')
                ->image()
                ->preserveFilenames()
                ->columnSpan('full'),
        ];
    }

    public function mount(): void
    {
        $this->form->fill([
            'header_logo' => setting('header_logo'),
            'footer_logo' => setting('footer_logo'),
        ]);
    }

    public function save(): void
    {
        $data = $this->form->getState();

        setting()->set('header_logo', $data['header_logo']);
        setting()->set('footer_logo', $data['footer_logo']);
        setting()->save();

        Notification::make()
            ->title('Site settings saved successfully.')
            ->success()
            ->send();
    }
}
