<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
    <body data-pc-preset="preset-1" data-pc-sidebar-theme="dark" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
        <div class="loader-bg">
            <div class="pc-loader">
                <div class="loader-fill"></div>
            </div>
        </div>
        @yield('content')
        @include('layout.js')
        @yield('script')
    </body>
</html>
