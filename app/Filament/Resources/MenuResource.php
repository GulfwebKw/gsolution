<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Models\Contracts\Page as PageContract;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-s-queue-list';

    public static function form(Form $form): Form
    {
        $routes = collect(\Route::getRoutes())->filter(function ($route) {
            /** @var Illuminate\Routing\Route $route */
            return strpos($route->uri(), '{') === false && $route->getName() && ! str($route->getName())->startsWith(['filament.' , 'livewire.']) ;
        })->mapWithKeys(function ($route) {
            return [$route->getName() => $route->getName()];
        })->toArray();
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                Forms\Components\Select::make('category')
                    ->required()
                    ->live()
                    ->options([
                        'header' => 'Header',
                        'quickLinkL' => 'Quick Links (Left)',
                        'quickLinkR' => 'Quick Links (Right)',
                        'footer' => 'Footer',
                    ]),
                Forms\Components\Radio::make('type')
                    ->live()
                    ->required()
                    ->options([
                        'page' => 'Page',
                        'direct_link' => 'Direct Link',
                        'route' => 'Route',
                        'Non' => 'Non of them',
                    ]),
                Forms\Components\Select::make('route')
                    ->searchable()
                    ->visible(fn (Get $get): bool => $get('type') == 'route')
                    ->requiredIf('type' , 'route')
                    ->options($routes),
                Forms\Components\Select::make('page_id')
                    ->searchable()
                    ->visible(fn (Get $get): bool => $get('type') == 'page')
                    ->requiredIf('type' , 'page')
                    ->options(\Z3d0X\FilamentFabricator\Models\Page::query()->get()->pluck('title' , 'id')->toArray()),
                TextInput::make('direct_link')
                    ->url()
                    ->visible(fn (Get $get): bool => $get('type') == 'direct_link')
                    ->requiredIf('type' , 'direct_link')
                    ->nullable(),
                Toggle::make('is_active')
                    ->inline(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\BooleanColumn::make('is_active'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('visit')
                    ->label(__('filament-fabricator::page-resource.actions.visit'))
                    ->url(fn (Menu $record) => $record->link)
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->openUrlInNewTab()
                    ->color('success'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
