<html>

<head>
    <title>J13SE - @yield('title')</title>

    {{--bootstrap--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    {{--bootstrap--}}
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>


    @section('sidebar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>

        </div>


    </nav>
    @show

    <div class="container">
        @yield('content')

</body>

</html>