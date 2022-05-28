<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&amp;subset=cyrillic" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="p-6">
    <h1>Тест</h1>

    <a href="{{ route('news.index') }}" class="link">Список новостных категорий</a>

    @yield('content')

    </div>
    </body>
</html>
