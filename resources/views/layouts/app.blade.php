<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>
    <!-- <div id="app"> -->
    <!-- <main class="py-4"> -->
    @yield('content')
    <!-- </main> -->
    <!-- </div> -->
</body>
@include('layouts.footar')

</html>