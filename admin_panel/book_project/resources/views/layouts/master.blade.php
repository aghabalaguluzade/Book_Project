<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
<body>
<div class="wrapper">
    @include('layouts.nav')
    @include('layouts.aside')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('layouts.footer')
    @include('layouts.js')

</div>
</body>
</html>