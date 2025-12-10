<?php

namespace App\Filament\Pages;

use App\Models\Settings as SettingsModel;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;
    
    protected static BackedEnum|string|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected string $view = 'filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = SettingsModel::firstOrCreate([]);
        $this->form->fill($settings->toArray());
    }

    protected function getFormSchema(): array
    {
        return [
            Section::make('Site Information')
                ->description('Configure your portfolio website information')
                ->schema([
                    TextInput::make('site_name')
                        ->label('Site Name')
                        ->maxLength(255),
                    TextInput::make('contact_email')
                        ->label('Contact Email')
                        ->email()
                        ->maxLength(255),
                ]),

            Section::make('Branding')
                ->description('Upload your site logo and favicon')
                ->schema([
                    FileUpload::make('logo_path')
                        ->label('Site Logo')
                        ->disk('public')
                        ->directory('branding')
                        ->image()
                        ->maxSize(5120),
                    FileUpload::make('favicon_path')
                        ->label('Favicon')
                        ->disk('public')
                        ->directory('branding')
                        ->acceptedFileTypes(['image/x-icon', 'image/png'])
                        ->maxSize(1024),
                ]),

            Section::make('Footer')
                ->description('Customize footer content')
                ->schema([
                    Textarea::make('footer_text')
                        ->label('Footer Text')
                        ->maxLength(65535),
                ]),

            Section::make('Social Links')
                ->description('Add your social media links')
                ->schema([
                    KeyValue::make('social_links')
                        ->label('Social Links')
                        ->keyLabel('Platform')
                        ->valueLabel('URL'),
                ]),
        ];
    }

    protected function getFormStatePath(): ?string
    {
        return 'data';
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Settings')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();
        $settings = SettingsModel::firstOrCreate([]);
        $settings->update($data);
        
        Notification::make()
            ->success()
            ->title('Settings saved successfully')
            ->send();
    }
}
