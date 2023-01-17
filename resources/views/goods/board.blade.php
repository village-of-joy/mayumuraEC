<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mayumura</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/goods.css" rel="stylesheet">
    </head>
    
    <body>
        <h1>Mayumura SHOP</h1>
        <form action="/varif" method="POST">
            @csrf
            <dev class="basis">
                <h2 class="bases">土台</h2>
                    <h3>木板</h3>
                    <input type="hidden" name="goods[basis_category]" value="木板"/>
                    
                <dev class="basis_name">
                    <div id="board_type">
                        <h2>土台（種類）</h2>
                        <div class="borad_img">
                            <div class="img_p">
                                <p>ノーマル</p>
                                <img src="image/board.jpg" alt="木板ノーマル画像" width="30%" height="30%">
                            </div>
                            <div class="img_p">
                                <p>ブランコ</p>
                                <img src="image/branko.jpg" alt="木板ブランコ画像" width="30%" height="30%">
                            </div>    
                        </div>
                        <div class="input_basis">
                            <div><input type="radio" name="goods[basis_name]" value="ノーマル">ノーマル</div>
                            <div><input type="radio" name="goods[basis_name]" value="ブランコ">ブランコ</div>
                        </div>
                    </div>
                </dev>
                
            </dev>
            
            <dev class="dolls">
                <h2>人形</h2>
                <dev>
                   <!-- foreach
                        <h3>カテゴリー</h3>
                        <p></p>
                        <h3>種類</h3>
                        <p></p>
                        <h3>人形名前</h3>
                        <p></p>
                        <h3>値段</h3>
                        <p></p>
                    endforeach  -->
                </dev>
                <dev>
                    <a href="/boardDolls"><button type="button">追加</button></a>
                </dev>
            </dev>
            
            <dev class="message">
                <h2>メッセージ</h2>
                <input type="text" name="goods[message]" id="textmes" maxlength="20" onkeyup="ShowLength1(value);">
                <p class="caution">※10文字程度でお願いします</p>
                <p id="inputlength1">0文字</p>
            </dev>
            
            <dev class="comment">
                <h2>コメント・要望</h2>
                <textarea name="goods[comment]" cols="24" rows="3" placeholder="200文字以下でお願いします" maxlength="200" onkeyup="ShowLength2(value);"></textarea>
                <p id="inputlength2">0文字</p>
            </dev>
            
            <input type="submit" value="確認"/>
        </form>
    
        <a href="/"><button type="button">戻る</button></a>
            
        <script>
            
            function ShowLength1(str){
                document.getElementById("inputlength1").innerHTML = str.length + "文字";
            }
            
            function ShowLength2(str){
                document.getElementById("inputlength2").innerHTML = str.length + "文字";
            }
        </script>
    </body>
</html>