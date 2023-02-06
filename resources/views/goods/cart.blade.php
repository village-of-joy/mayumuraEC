<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mayumura</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>

    <body>
        <h1>Mayumura SHOP</h1>
        <h2>カート</h2>
            @foreach($goods as $good)
                <p>{{$good->basis_name}}</p>
                <p>{{$good->price->price}}</p>
            @endforeach
        <script></script>
    </body>
</html>