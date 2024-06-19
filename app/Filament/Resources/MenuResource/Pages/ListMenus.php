<?php

namespace App\Filament\Resources\MenuResource\Pages;

use App\Filament\Resources\MenuResource;
use Filament\Actions;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListMenus extends ListRecords
{
    use ExposesTableToWidgets;
    protected static string $resource = MenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            MenuResource\Widgets\MenuNestedListWidget::class
        ];
    }


    public function getTabs(): array
    {
        return [
            'Header' => Tab::make()->query(fn ($query) => $query->where('category', 'header')),
            'Quick Link' => Tab::make()->query(fn ($query) => $query->where('category', 'quickLink')),
            'Footer' => Tab::make()->query(fn ($query) => $query->where('category', 'footer')),
        ];
    }
}
