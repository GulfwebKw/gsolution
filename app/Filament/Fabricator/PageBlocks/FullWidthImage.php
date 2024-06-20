<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Get;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FullWidthImage extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('full-width-image')
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->directory('pages/'.now()->format('Y/m/d'))
                    ->imageEditor()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
