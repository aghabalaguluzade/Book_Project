<!DOCTYPE html>
<html lang="en">
    @include('templates.head')
<body >

    <div class="wrapper">
        @include('templates.header')
        @yield('content')
        @include('templates.footer')
    </div>
    
    @include('templates.js')
    
</body>
</html>