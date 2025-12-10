<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use App\Models\Category;
use App\Models\Tag;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Portfolio Details')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Select::make('category_id')
                            ->label('Category')
                            ->required()
                            ->options(fn () => Category::where('active', true)->pluck('name', 'id')),
                        Select::make('tags')
                            ->relationship('tags', 'name')
                            ->multiple()
                            ->preload(),
                        Textarea::make('description')
                            ->maxLength(65535),
                        Textarea::make('objective')
                            ->maxLength(65535),
                        Toggle::make('show')
                            ->label('Show on Public Portfolio')
                            ->default(false),
                    ]),

                Section::make('Images')
                    ->schema([
                        FileUpload::make('images')
                            ->multiple()
                            ->directory('portfolio-images')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(10240)
                            ->reorderable()
                            ->appendFiles(),
                    ]),
            ]);
    }
}

