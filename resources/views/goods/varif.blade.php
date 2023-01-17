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
            <h3 class="basis_category">
                {{ $goods->basis_category }}
            </h3>

            <h3 class="basis_name">
                {{ $goods->basis_name }}
            </h3>

            <h3 class="basis_option">
                {{ $goods->basis_option }}
            </h3>

            <h3 class="message">
                {{ $goods->message }}
            </h3>

            <h3 class="comment">
                {{ $goods->comment }}
            </h3>
            
            <p>{{ $basisPrice }}</p>
            
        <script></script>
    </body>
</html>