<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Layouts\Layout;
use Z3d0X\FilamentFabricator\Models\Contracts\Page;

Route::get('/', function () {

    $filamentFabricatorPage = FilamentFabricator::getPageModel()::query()
        ->where('layout', 'homepage')
        ->firstOrFail();

    /** @var ?class-string<Layout> $layout */
    $layout = FilamentFabricator::getLayoutFromName($filamentFabricatorPage?->layout);

    if (! isset($layout)) {
        throw new \Exception("Filament Fabricator: Layout \"{$filamentFabricatorPage->layout}\" not found");
    }

    /** @var string $component */
    $component = $layout::getComponent();

    return Blade::render(
        <<<'BLADE'
            <x-dynamic-component
                :component="$component"
                :page="$page"
            />
            BLADE,
        ['component' => $component, 'page' => $filamentFabricatorPage]
    );
});


Route::view('/contactus', 'contactus')->name('contact-us');


Route::get('/careers', function () {
    return view('careers' , ['positions' => \App\Models\Career::query()
        ->where('is_active' , true)
        ->orderByDesc('id')
        ->get()]);
})->name('careers');
Route::get('/careers/{Career}/{slug?}', function (\App\Models\Career $Career , $slug = null) {
    if ( ! $slug )
        return redirect()->route('news-item' , ['Career' => $Career , 'slug' => \Illuminate\Support\Str::slug($Career->title) ]);

    return view('career-item' , ['position' => $Career]);
})->name('career-item');


Route::get('/news', function () {
    return view('news' , ['news' => \App\Models\News::query()
        ->where('is_active' , true)
        ->orderByDesc('id')
        ->paginate(12)]);
})->name('news');
Route::get('/news/{News}/{slug?}', function (\App\Models\News $News , $slug = null) {
    if ( ! $slug )
        return redirect()->route('news-item' , ['News' => $News , 'slug' => \Illuminate\Support\Str::slug($News->title) ]);

    return view('news-item' , ['newsItem' => $News]);
})->name('news-item');
