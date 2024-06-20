<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Get;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ContactUsForm extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('contact-us-form')
            ->schema([
                TextInput::make('title'),
                TextInput::make('redTitle'),
                TextInput::make('buttonLabel')->required(),
                TextInput::make('successMessage')->required(),
                Toggle::make('uploadFile')
                    ->live()
                    ->inline(),
                TextInput::make('attachment_title')
                    ->visible(fn (Get $get): bool => $get('uploadFile'))
                    ->required(),
                Repeater::make('fields')
                    ->columnSpanFull()
                    ->columnSpan(2)
                    ->collapsible()
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('title')
                            ->required(),
                        Select::make('type')
                            ->options([
                                'text' => 'Text Field',
                                'email' => 'Email Field',
                                'number' => 'Numeric Field',
                                'textarea' => 'Multiline Text Field',
                            ])
                            ->required(),
                        TextInput::make('icon')
                            ->helperText('font awesome icon like: `far fa-phone`')
                            ->required(),
                        Repeater::make('validation')
                            ->columnSpanFull()
                            ->columnSpan(2)
                            ->collapsible()
                            ->schema([
                                TextInput::make('rule')
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
