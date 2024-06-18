<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Get;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class PriceTable extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('price-table')
            ->schema([
                TextInput::make('title'),
                TextInput::make('redTitle'),
                TinyEditor::make('content')
                    ->columnSpan(2),
                TextInput::make('buyButtonLabel'),
                Repeater::make('plans')
                    ->columns(1)
                    ->collapsed()
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('price'),
                        TextInput::make('description'),
                        TextInput::make('buyButtonLink'),
                        IconPicker::make('icon')
                            ->columns([
                                'default' => 1,
                                'lg' => 3,
                                '2xl' => 5,
                            ])
                            ->sets(['fontawesome-solid' , 'fontawesome-regular' , 'fontawesome-brands']),

                        Toggle::make('isPopular')
                            ->live()
                            ->inline(),
                        TextInput::make('popularTitle')
                            ->visible(fn (Get $get): bool => $get('isPopular')),
                        Repeater::make('features')
                            ->columns(1)
                            ->collapsed()
                            ->schema([
                                TextInput::make('title')
                                    ->required(),
                            ]),
                    ]),

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
