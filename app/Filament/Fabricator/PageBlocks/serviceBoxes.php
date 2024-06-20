<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class serviceBoxes extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('service-boxes')
            ->schema([
                TextInput::make('title'),
                TextInput::make('redTitle'),
                Repeater::make('boxes')
                    ->columnSpanFull()
                    ->columnSpan(2)
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('link')
                            ->url()
                            ->nullable(),
                        Textarea::make('description')
                            ->nullable(),
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
