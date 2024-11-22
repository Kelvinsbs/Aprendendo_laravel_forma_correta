<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Meu Titulo')</title>
</head>
<body>
    <h1>Meu layout</h1>

    @section('sidebar')
        <div>
            <nav>
                Sidebar
            </nav>
        </div>
    @show

    @yield('content')
</body>
</html>
