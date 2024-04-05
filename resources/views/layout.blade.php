<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz - Ben 10</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="cotainer-fluid">
        <nav class="navbar navbar-dark bg-dark">
        <strong><a class="navbar-brand" href="#">
            <img src="{{asset('storage/image/omnitrix.png')}}" width="30" height="30" class="d-inline-block align-top" style="padding-right: 2px" alt="omnitrix">
            Quiz do Ben 10
        </a></strong>
    </div>
    <div class="container">
        <main role="main" class="py-6">
            @hasSection('content')
                @yield('content')
            @endif
    </div>
    <div class="container-fluid">
        <footer class="footer mt-auto py-5">
            <div class="container-fluid">
                <span class="text-muted">Direitos reservados a ©copyright</span>
            </div>
        </footer>
    </div>
</nav>
</body>
</html>