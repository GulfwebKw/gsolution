<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Counter extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('counter')
            ->schema([
                Repeater::make('items')
                    ->columnSpanFull()
                    ->columnSpan(2)
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('total')
                            ->numeric()
                            ->required()
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
