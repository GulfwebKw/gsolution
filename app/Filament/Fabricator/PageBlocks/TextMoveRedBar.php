<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TextMoveRedBar extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('text-move-in-red-bar')
            ->schema([
                Repeater::make('bar')
                    ->columns(1)
                    ->collapsible()
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
