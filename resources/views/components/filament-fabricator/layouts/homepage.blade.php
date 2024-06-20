@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">

    <div class="page-wrapper">

        @include('layouts.header')


        <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

        @include('layouts.footer')

    </div>

</x-filament-fabricator::layouts.base>
