<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Get;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ContentWithImage extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('content-with-image')
            ->schema([
                TextInput::make('title'),
                TextInput::make('redTitle'),
                TinyEditor::make('content')
                    ->columnSpan(2),

                TextInput::make('readMoreTitle'),
                TextInput::make('readMoreLink')
                    ->url(),
                Repeater::make('checkMarkList')
                    ->columnSpanFull()
                    ->columnSpan(2)
                    ->collapsible()
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                    ]),
                Repeater::make('keyValueList')
                    ->columnSpanFull()
                    ->columnSpan(2)
                    ->columns(2)
                    ->collapsible()
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        Textarea::make('description')
                            ->required(),
                    ]),
                Toggle::make('showImage')
                    ->live()
                    ->inline(),
                Radio::make('imagePosition')
                    ->inline()
                    ->visible(fn (Get $get): bool => $get('showImage'))
                    ->options([
                        'left' => 'Left',
                        'right' => 'Right',
                    ]),
                FileUpload::make('image')
                    ->image()
                    ->directory('pages/'.now()->format('Y/m/d'))
                    ->imageEditor()
                    ->visible(fn (Get $get): bool => $get('showImage'))
                    ->nullable(),
                Radio::make('typeOfRedBox')
                    ->live()
                    ->visible(fn (Get $get): bool => $get('showImage'))
                    ->options([
                        'hide' => 'Hide',
                        'square' => 'Square',
                        'semicircular' => 'Semicircular',
                    ]),
                TextInput::make('redSquareBoxText')
                    ->visible(fn (Get $get): bool => $get('showImage') && $get('typeOfRedBox') == 'square'),
                FileUpload::make('redSemicircularBoxTextImage')
                    ->image()
                    ->directory('pages/'.now()->format('Y/m/d'))
                    ->imageEditor()
                    ->visible(fn (Get $get): bool => $get('showImage') && $get('typeOfRedBox') == 'semicircular')
                    ->nullable(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
