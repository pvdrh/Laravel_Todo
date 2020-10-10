<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Todo - Basic</title>

    @yield('css')

    
</head>
<body id="app-layout">
@include('layouts.header')

<div class="container">
@yield('body')

@include('layouts.footer')
</div>
</div>
</div>
@yield('script')
</body>

</body>
</html>
