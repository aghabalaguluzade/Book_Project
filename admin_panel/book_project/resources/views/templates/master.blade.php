<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('templates.head')
    @yield('addcss')
<body >

    <div class="wrapper">
        @include('templates.nav')
        @include('templates.header')
        @yield('content')
        @include('templates.footer')
    </div>
    
    @include('templates.js')
    @yield('addjs')
</body>
</html>