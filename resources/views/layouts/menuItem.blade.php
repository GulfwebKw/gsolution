@foreach(\App\Models\Menu::query()
    ->where('is_active' , true)
    ->where('parent_id' , optional($menu ?? null)->id ?? -1 )
    ->where('category' , $type)
    ->Ordered()
    ->get() as $item)
    @if($item->children()->count() > 0)
        <li class="dropdown"><a href="{{ $item->link }}">{{ $item->title }}</a>
            <ul>
                @include('layouts.menuItem' , ['type' => 'header' , 'menu' => $item])
            </ul>
        </li>
    @else
        <li><a href="{{ $item->link }}">{{ $item->title }}</a></li>
    @endif
@endforeach
