<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Portfolio extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('portfolio')
            ->schema([
                Repeater::make('projects')
                    ->columns(2)
                    ->collapsible()
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('redTitle'),
                        TextInput::make('platform'),
                        TextInput::make('link')->url(),
                        FileUpload::make('image')
                            ->image()
                            ->directory('pages/'.now()->format('Y/m/d'))
                            ->imageEditor()
                            ->nullable(),
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
