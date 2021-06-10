<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Bookshop project</title>

    <link rel="stylesheet" href="{{ mix('css/style.css') }}">

</head>
<body>

    @include('partials.header', [
        'current' => $current_menu_item ?? null
    ])

    <h1>Bookshop project</h1>

    <main>

        @include('partials.messages')

        @yield('content')

    </main>

</body>
</html>

