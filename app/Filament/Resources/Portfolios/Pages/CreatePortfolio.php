<?php

namespace App\Filament\Resources\Portfolios\Pages;

use App\Filament\Resources\Portfolios\PortfolioResource;
use App\Models\PortfolioImage;
use Filament\Resources\Pages\CreateRecord;

class CreatePortfolio extends CreateRecord
{
    protected static string $resource = PortfolioResource::class;

    protected function afterCreate(): void
    {
        $uploadedFiles = $this->form->getState()['images'] ?? [];

        if (!empty($uploadedFiles)) {
            foreach ($uploadedFiles as $index => $filePath) {
                PortfolioImage::create([
                    'portfolio_id' => $this->record->id,
                    'image_path' => $filePath,
                    'order' => $index,
                    'is_cover' => $index === 0,
                ]);
            }
        }
    }
}

