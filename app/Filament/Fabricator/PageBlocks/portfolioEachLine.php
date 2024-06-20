<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class portfolioEachLine extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('portfolio-each-line')
            ->schema([
                TextInput::make('title'),
                TextInput::make('redTitle'),
                TextInput::make('buttonLabel'),
                TextInput::make('buttonLink')
                    ->url(),
                Repeater::make('projects')
                    ->columns(2)
                    ->collapsible()
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('subTitle'),
                        TextInput::make('link')
                            ->url(),
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
