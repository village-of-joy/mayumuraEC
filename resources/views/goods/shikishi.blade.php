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
                    <h3>色紙</h3>
                    <input type="hidden" name="goods[basis_category]" value="色紙"/>
                    
                <div id="shikishi_type">
                        <div class="shikishi_img">
                            <div class="img_p">
                                <img src="image/shikishi.jpg" alt="色紙ノーマル画像" width="30%" height="30%">
                                <p>ノーマル</p>
                            </div>
                            <div class="img_p">
                                <img src="image/bamboo_stand.jpg" alt="色紙竹立画像" width="30%" height="30%">
                                <p>竹立</p>
                            </div>
                            <div class="img_p">
                                <img src="image/bamboo_triangle.jpg" alt="色紙竹三角画像" width="30%" height="30%">
                                <p>竹三角</p>
                            </div>
                            <div class="img_p">
                                <img src="image/bamboo_scissors.jpg" alt="色紙竹ばさみ画像" width="30%" height="30%">
                                <p>竹ばさみ</p>
                            </div>
                            <div class="img_p">
                                <img src="image/fan.jpg" alt="色紙扇面画像" width="30%" height="30%">
                                <p>扇面</p>
                            </div>
                        </div>
                        
                        <div class="input_basis">
                            <div><input type="radio" name="goods[basis_name]" value="ノーマル">ノーマル ¥0</div>
                            <div><input type="radio" name="goods[basis_name]" value="竹立">竹立 ¥400</div>
                            <div><input type="radio" name="goods[basis_name]" value="竹三角">竹三角 ¥600</div>
                            <div><input type="radio" name="goods[basis_name]" value="竹ばさみ">竹ばさみ ¥650</div>
                            <div><input type="radio" name="goods[basis_name]" value="扇面">扇面 ¥700</div>
                        </div>
                        
                        <div class="shikishi_option">
                            <h2>色紙の色</h2>
                            <dev class="img_p">
                                <img src="image/shikishi_blue.jpg" alt="色紙青画像" width="30%" height="30%">
                                <p>色紙・青</p>
                            </dev>
                            <div class="input_basis">
                                <div><input type="radio" name="goods[basis_option]" value="色紙・青">色紙・青</div>
                            </div>
                        </div>
                </div>
                
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
                    <a href="/shikishiDolls"><button type="button">追加</button></a>
                </dev>
            </dev>
            
            <dev class="message">
                <h2>メッセージ</h2>
                <input type="text" name="goods[message]" id="textmes" maxlength="20" onkeyup="ShowLength1(value);">
                <p class="caution">※20文字以内でお願いします</p>
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