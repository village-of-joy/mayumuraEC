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
        <div class='bases'> <!--cssで横並び-->
            @foreach ($bases as $base)
            <div class='base'>
                <!-- image -->
                <h2 class='base_name'>{{ $base->name }}</h2>
            </div>
            @endforeach
        </div>
    </body>
</html>