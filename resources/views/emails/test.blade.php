<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mayumura</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    
    <body>
        <h2>テストメール</h2>
        <p>from：{{ Auth::user()->name }}</p>
        
        @php
            $total = 0;
            $num = 0;
        @endphp
        @foreach($goods as $good)
            @php
                $num += 1;
            @endphp
            <h2>{{$num}}個目</h2>
            <h3>土台</h3>
            <p>{{$good->basis_category}}:{{$good->basis_name}}</p>
            <h3>人形1</h3>
            <p>{{$good->doll_category1}}：{{$good->doll_name1}}</p>
            <h3>人形2</h3>
            <p>{{$good->doll_category2}}：{{$good->doll_name2}}</p>
            <h3>メッセージ</h3>
            <p>{{$good->message}}</p>
            <h3>コメント・要望</h3>
            <p>{{$good->comment}}</p>
            <h3>小計</h3>
            <p>{{$good->price->price}}円</p>
            @php
                $total += $good->price->price;
            @endphp
            
        @endforeach
        
        <h2>合計金額</h2>
        <p>{{$total}}円</p>
        
        <script></script>
    </body>
</html>