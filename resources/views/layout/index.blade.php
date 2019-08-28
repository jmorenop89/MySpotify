<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>@yield('titulo')</title>
</head>
<body>

    @include('layout.nav')

    <div class="container-fluid" style="margin-top:50px">
    <div class="row">
        
        @include('layout.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        
            <h2>@yield('titulo-seccion')</h2>

            @yield('contenido')

        </main>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>