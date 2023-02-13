<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mayumura</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--<script src="https://cdn.tailwindcss.com"></script>-->
    </head>
    
    <body>
        <x-app-layout>
            
            <x-slot name="header">
                test
                <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </x-slot>
            
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">まゆ村 嵐山店</h1>
            <div class="rule">
                <h2>購入手順</h2>
                <p>1.本ページで人形の土台となるものを選んでください。<br>2.ページ移動先で人形を選び、選択した土台の種類を選択してください。<br>3.メッセージには人形に付けるメッセージを入力してください。<br>コメントには要望をご記入ください。</p>
                <p class="caution">メッセージ、コメントはご記入いただかなくても大丈夫です。<br>ブラウザバックは使わないでください。</p>
                
            </div>
            <h2>購入</h2>
            <div>
                <h3>土台を選択</h3>
                <a href="/board"><button>木板</button></a>
                <a href="/shikishi"><button>色紙</button></a>
                <br>
            </div>
            <div>
                <a href="/cart/show"><button>カート</button></a>
            </div>
            
            <div>
                <h2>Contact</h2>
                <h3>Access</h3>
                <table>
                    <tr>
                        <th>所在地住所</th>
                        <td>〒616-8384</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>075-882-0564</td>
                    </tr>
                </table>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.6429554778115!2d135.67525451429418!3d35.01564187379498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001a9ff97f2a6fd%3A0x7029f73138b13048!2z44G-44KG5p2RIOW1kOWxseW6lw!5e0!3m2!1sja!2sjp!4v1676097487531!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </x-app-layout>
        
        <script></script>
    </body>
</html>