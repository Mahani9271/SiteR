<!DOCTYPE html>
<html>
    <head>
        @include('Administrator.Layout.Meta')
        @yield('meta')
        @yield('title')
        @include('Administrator.Layout.Common-CSS')
        @yield('css')

    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('Administrator.Layout.Nav')
            @include('Administrator.Layout.Sidebar')

            <div class="content-wrapper">
                @include('Administrator.Layout.Header')
                <section class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </section>
            </div>
            @include('Administrator.Layout.Footer')
            @include('Administrator.Layout.Sidebarcontroller')
        </div>

        @include('Administrator.Layout.Common-JS')
        @yield('js')
    </body>
</html>
