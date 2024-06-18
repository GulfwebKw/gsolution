<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class RedCircleButton extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('red-circle-button')
            ->columns(2)
            ->schema([
                TextInput::make('title'),
                TextInput::make('redTitle'),
                TextInput::make('buttonTitle')->required(),
                TextInput::make('buttonLink')->url()->required(),
                TextInput::make('backgroundText'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
