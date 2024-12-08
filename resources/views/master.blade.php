<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>

    <header>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About</a>
            <a href="{{route('contact')}}">Contact</a>
            <a href="{{route('portfolio')}}">Portfolio</a>
        </nav>
    </header>

    <div>
        @yield('content')
    </div>

    <div class="footer">
         <p>Copyright &copy;{{date('Y')}} Creative Designer Mahfuz</p>
    </div>
</body>
</html>