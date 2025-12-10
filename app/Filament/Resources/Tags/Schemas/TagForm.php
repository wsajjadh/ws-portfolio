<?php

namespace App\Filament\Resources\Tags\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Tag Details')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Select::make('type')
                            ->options([
                                'Tech Stack' => 'Tech Stack',
                                'Automation Tools' => 'Automation Tools',
                                'Platforms' => 'Platforms',
                                'Project Nature' => 'Project Nature',
                            ])
                            ->placeholder('Select a type'),
                        Toggle::make('active')
                            ->default(true),
                    ]),
            ]);
    }
}
