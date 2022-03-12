<!DOCTYPE html>
<html lang="en">
    @include('templates.head')
<body>

    <div class="site-wrapper" id="top">
        @include('templates.header')
        @yield('content')
    </div>

    @include('templates.section')
    @include('templates.footer')
    @include('templates.js')
    
</body>
</html>