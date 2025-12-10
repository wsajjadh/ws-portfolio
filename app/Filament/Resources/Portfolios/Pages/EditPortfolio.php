<?php

namespace App\Filament\Resources\Portfolios\Pages;

use App\Filament\Resources\Portfolios\PortfolioResource;
use App\Models\PortfolioImage;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPortfolio extends EditRecord
{
    protected static string $resource = PortfolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $uploadedFiles = $this->form->getState()['images'] ?? [];

        if (!empty($uploadedFiles)) {
            // Get existing images
            $existingPaths = $this->record->images()->pluck('image_path')->toArray();
            
            // Delete images that are no longer in the upload
            foreach ($existingPaths as $path) {
                if (!in_array($path, $uploadedFiles)) {
                    PortfolioImage::where('image_path', $path)->delete();
                }
            }

            // Add new images
            foreach ($uploadedFiles as $index => $filePath) {
                if (!PortfolioImage::where('portfolio_id', $this->record->id)
                    ->where('image_path', $filePath)
                    ->exists()) {
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
}

