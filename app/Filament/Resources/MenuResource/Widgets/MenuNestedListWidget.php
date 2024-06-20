<?php

namespace App\Filament\Resources\MenuResource\Widgets;

use App\Filament\Resources\MenuResource\Pages\ListMenus;
use App\Models\Menu;
use Filament\Notifications\Notification;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Illuminate\Database\Eloquent\Builder;
use SolutionForest\FilamentTree\Actions\Action;
use SolutionForest\FilamentTree\Actions\ActionGroup;
use SolutionForest\FilamentTree\Actions\DeleteAction;
use SolutionForest\FilamentTree\Actions\EditAction;
use SolutionForest\FilamentTree\Actions\ViewAction;
use SolutionForest\FilamentTree\Widgets\Tree as BaseWidget;

class MenuNestedListWidget extends BaseWidget
{
    use InteractsWithPageTable;
    protected static string $model = Menu::class;

    protected static int $maxDepth = 2;

    protected ?string $treeTitle = 'Menu List';

    protected bool $enableTreeTitle = true;

    protected function getTablePage(): string
    {
        return ListMenus::class;
    }

    protected function getTreeQuery(): Builder
    {
        $wheres = collect($this->getPageTableQuery()->getQuery()->wheres);
        $category = $wheres->filter(function ($item) {
            return $item['column'] = 'category';
        })->first();
        return $this->getModel()::query()->where('category' , $category['value']);
    }
    protected function getFormSchema(): array
    {
        return [
            //
        ];
    }

    // INFOLIST, CAN DELETE
    public function getViewFormSchema(): array {
        return [
            //
        ];
    }

    // CUSTOMIZE ICON OF EACH RECORD, CAN DELETE
    // public function getTreeRecordIcon(?\Illuminate\Database\Eloquent\Model $record = null): ?string
    // {
    //     return null;
    // }

    // CUSTOMIZE ACTION OF EACH RECORD, CAN DELETE
    // protected function getTreeActions(): array
    // {
    //     return [
    //         Action::make('helloWorld')
    //             ->action(function () {
    //                 Notification::make()->success()->title('Hello World')->send();
    //             }),
    //         // ViewAction::make(),
    //         // EditAction::make(),
    //         ActionGroup::make([
    //
    //             ViewAction::make(),
    //             EditAction::make(),
    //         ]),
    //         DeleteAction::make(),
    //     ];
    // }
    // OR OVERRIDE FOLLOWING METHODS
    //protected function hasDeleteAction(): bool
    //{
    //    return true;
    //}
    //protected function hasEditAction(): bool
    //{
    //    return true;
    //}
    //protected function hasViewAction(): bool
    //{
    //    return true;
    //}
}
