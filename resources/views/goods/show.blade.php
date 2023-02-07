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
            <h3>土台（カテゴリー）：{{$goods->basis_category}}</h3>
            <p>土台（種類）：{{$goods->basis_name}}</p>
            <h3>人形１：{{$goods->doll_category1}}</h3>
            <p>種類：{{$goods->doll_name1}}</p>
            <h3>人形２：{{$goods->doll_category2}}</h3>
            <p>種類：{{$goods->doll_name2}}</p>
            <h3>メッセージ</h3>
            <p>{{$goods->message}}</p>
            <h3>コメント</h3>
            <p>{{$goods->comment}}</p>
            <h3>合計金額：{{$goods->price->price}}</h3>
            <a href="/cart/show"><button>戻る</button></a>
        <script></script>
    </body>
</html>