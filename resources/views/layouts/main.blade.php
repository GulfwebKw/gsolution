<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.headTag')
</head>
<body>
    <div class="page-wrapper">

        @include('layouts.header')

        @hasSection('breadcrumb')
            @include('layouts.breadcrumb')
        @endif

        @yield('body')

        @include('layouts.footer')
    </div>
    <!--End pagewrapper-->

    @include('layouts.footerjs')
</body>
</html>
