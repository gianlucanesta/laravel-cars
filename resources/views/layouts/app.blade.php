<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="{{ route('cars.index')}}">Lista Cars</a>
                        <a class="nav-link" href="{{ route('cars.create')}}">Crea Nuova Car</a>
                    </div>
                </div>

            </div>
        </nav>
    </header>

    <main>
        @yield('main_content')
    </main>
    
</body>
</html>