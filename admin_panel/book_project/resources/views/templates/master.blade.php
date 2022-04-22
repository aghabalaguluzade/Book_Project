<!DOCTYPE html>
<html lang="en">
    @include('templates.head')
    @yield('addcss')
<body >

    <div class="wrapper">
        @include('templates.header')
        @yield('content')
        @include('templates.footer')
    </div>
    
    @include('templates.js')
    @yield('addjs')
</body>
</html>