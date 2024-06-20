<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class LastNews extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('last-news')
            ->columns(2)
            ->schema([
                TextInput::make('title')->columnSpan(1),
                TextInput::make('redTitle')->columnSpan(1),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
