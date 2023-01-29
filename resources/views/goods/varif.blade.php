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
            <h3>土台：{{$goods->basis_category}}</h3>
            <p>種類：{{$goods->basis_name}}</p>
            <h3>土台値段</h3>
            <p>{{$basisPrice}}円</p>
            @foreach($goods as $good)
                <h3>人形</h3>
                <p>カテゴリー：{{$good->dolls_category}}</p>
                <p>種類：{{$good->dolls_name}}</p>
            @endforeach
            
        </div>
            
        <script></script>
    </body>
</html>