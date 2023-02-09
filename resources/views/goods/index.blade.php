<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mayumura</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        <h1>まゆ村 嵐山店</h1>
        <div class="rule">
            <h2>購入手順</h2>
            <p>1.本ページで人形の土台となるものを選んでください。<br>2.ページ移動先で人形を選び、選択した土台の種類を選択してください。<br>3.メッセージには人形に付けるメッセージを入力してください。<br>コメントには要望をご記入ください。</p>
            <p class="caution">メッセージ、コメントはご記入いただかなくても大丈夫です。</p>
            
        </div>
        <h2>購入</h2>
        <dev>
            <h3>土台を選択</h3>
            <a href="/board"><button>木板</button></a>
            <a href="/shikishi"><button>色紙</button></a>
            <br>
        </dev>
        <dev>
            <a href="/cart/show"><button>カート</button></a>
        </dev>
        
        <script></script>
    </body>
</html>