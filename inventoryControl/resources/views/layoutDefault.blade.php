<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de estoque</title>
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        @component('component_navbar', ['current' => $current])
        @endcomponent
    </header>
    <main role="main" class="container mt-3">
        @hasSection('body')
            @yield('body')
        @endif
    </main>
</body>
    <script src="{{ asset('site/bootstrap.js') }}" />
</html>
