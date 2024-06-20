@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">


    <div class="page-wrapper">

        @include('layouts.header')

        @section('title' , $page->title)
        @section('breadcrumb')
            <li class="breadcrumb-item active">{{ $page->title }}</li>
        @endsection

        @include('layouts.breadcrumb')

        <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

        @include('layouts.footer')

    </div>
    <!--End pagewrapper-->

</x-filament-fabricator::layouts.base>
