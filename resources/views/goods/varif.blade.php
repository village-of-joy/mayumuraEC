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
        <h2>確認</h2>
            
        <div class="verification">
            <p>{{$dolls->id}}</p>
            <h3>土台：{{$dolls->category}}</h3>
            <p>種類：{{$dolls->name}}</p>
            <h3>土台値段</h3>
            <p>?円</p>
            
                <h3>人形</h3>
                <p>カテゴリー：{{$dolls->category}}</p>
                <p>種類：{{$dolls->name}}</p>
            
        </div>
            
        <script></script>
    </body>
</html>