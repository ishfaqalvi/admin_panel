<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>@include('admin.layout.head')</head>
    <body>
        <div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
            @include('admin.layout.navigation')
        </div>
        <div class="page-content">
            <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
                @include('admin.layout.sidebar')
            </div>
            <div class="content-wrapper">
                <div class="content-inner">
                    <div class="page-header page-header-light shadow">
                        @yield('header')
                    </div>
                    <div class="content">
                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                    <div class="navbar navbar-sm navbar-footer border-top">
                        @include('admin.layout.footer')
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="notifications">
            @include('admin.layout.notification')
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
            @include('admin.layout.configuration')
        </div>
    </body>
</html>