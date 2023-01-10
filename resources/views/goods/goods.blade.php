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
        <dev class="basis">
            <h2 class="bases">土台</h2>
            <select id="selbox" onchange="change();">
                <option value="1">木板</option>
                <option value="2">色紙</option>
                <option value="3">モビール</option>
                <option value="4">カレンダー</option>
            </select>
            <p id="txt1">木板</p>
            <p id="txt2" style="display:none">色紙</p>
            <p id="txt3" style="display:none">モビール</p>
            <p id="txt4" style="display:none">カレンダー ¥1200</p>
            
            <dev class="basis_name">
                <div id="board_type">
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
                        <div><input type="radio" name="board" value="ノーマル">ノーマル</div>
                        <div><input type="radio" name="board" value="ブランコ">ブランコ</div>
                    </div>
                </div>
                
                <div id="shikishi_type" style="display:none">
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
                        <div><input type="radio" name="shikishi" value="ノーマル">ノーマル ¥0</div>
                        <div><input type="radio" name="shikishi" value="竹立">竹立 ¥400</div>
                        <div><input type="radio" name="shikishi" value="竹三角">竹三角 ¥600</div>
                        <div><input type="radio" name="shikishi" value="竹ばさみ">竹ばさみ ¥650</div>
                        <div><input type="radio" name="shikishi" value="扇面">扇面 ¥700</div>
                    </div>
                    <div class="shikishi_option">
                        <h2>色紙の色</h2>
                        <dev class="img_p">
                            <img src="image/shikishi_blue.jpg" alt="色紙青画像" width="30%" height="30%">
                            <p>色紙・青</p>
                        </dev>
                        <div class="input_basis">
                            <div><input type="radio" name="shikishi_option" value="色紙・青">色紙・青</div>
                        </div>
                    </div>
                </div>
                <div id="calender_type" style="display:none">
                    <div class="shikishi_option">
                        <h2>色紙の色</h2>
                        <dev class="img_p">
                            <img src="image/shikishi_blue.jpg" alt="色紙青画像" width="30%" height="30%">
                            <p>色紙・青</p>
                        </dev>
                        <div class="input_basis">
                            <div><input type="radio" name="shikishi_option" value="色紙・青">色紙・青</div>
                        </div>
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
                <a href="/dolls"><button type="button">追加</button></a>
            </dev>
        </dev>
        
        <dev class="message">
            <h2>メッセージ</h2>
            <input type="text" id="mes1" maxlength="10">
            <p id="caution1" class="caution">※10文字以内</p>
            <input type="text" id="mes2" maxlength="20" style="display:none">
            <p id="caution2" class="caution" style="display:none">※20文字以内</p>
        </dev>
        
        <dev class="comment">
            <h3>コメント・要望</h3>
            <textarea cols="24" rows="3" placeholder="200文字以下でお願いします" maxlength="200" onkeyup="ShowLength(value);"></textarea>
            <p id="inputlength">0文字</p>
        </dev>
        
        <a href="/dolls"><button type="button">next</button></a>
        <a href="/"><button type="button">戻る</button></a>
            
        <script>
            function change() {
                if(document.getElementById("selbox"))
                {
                    selboxValue = document.getElementById("selbox").value;
                    if (selboxValue == "1"){
                        document.getElementById("txt1").style.display = "";
                        document.getElementById("txt2").style.display = "none";
                        document.getElementById("txt3").style.display = "none";
                        document.getElementById("txt4").style.display = "none";
                        document.getElementById("mes1").style.display = "";
                        document.getElementById("mes2").style.display = "none";
                        document.getElementById("caution1").style.display = "";
                        document.getElementById("caution2").style.display = "none";
                        document.getElementById("board_type").style.display ="";
                        document.getElementById("shikishi_type").style.display = "none";
                        document.getElementById("calender_type").style.display = "none";
                    } else if (selboxValue == "2"){
                        document.getElementById("txt2").style.display = "";
                        document.getElementById("txt1").style.display = "none";
                        document.getElementById("txt3").style.display = "none";
                        document.getElementById("txt4").style.display = "none";
                        document.getElementById("mes2").style.display = "";
                        document.getElementById("mes1").style.display = "none";
                        document.getElementById("caution1").style.display = "none";
                        document.getElementById("caution2").style.display = "";
                        document.getElementById("board_type").style.display ="none";
                        document.getElementById("shikishi_type").style.display = "";
                        document.getElementById("calender_type").style.display = "none";
                    } else if (selboxValue == "3"){
                        document.getElementById("txt3").style.display = "";
                        document.getElementById("txt1").style.display = "none";
                        document.getElementById("txt2").style.display = "none";
                        document.getElementById("txt4").style.display = "none";
                        document.getElementById("mes2").style.display = "none";
                        document.getElementById("mes1").style.display = "none";
                        document.getElementById("caution1").style.display = "none";
                        document.getElementById("caution2").style.display = "none";
                        document.getElementById("board_type").style.display ="none";
                        document.getElementById("shikishi_type").style.display = "none";
                        document.getElementById("calender_type").style.display = "none";
                    } else if (selboxValue == "4"){
                        document.getElementById("txt4").style.display = "";
                        document.getElementById("txt1").style.display = "none";
                        document.getElementById("txt2").style.display = "none";
                        document.getElementById("txt3").style.display = "none";
                        document.getElementById("mes2").style.display = "";
                        document.getElementById("mes1").style.display = "none";
                        document.getElementById("caution1").style.display = "none";
                        document.getElementById("caution2").style.display = "";
                        document.getElementById("board_type").style.display ="none";
                        document.getElementById("shikishi_type").style.display = "none";
                        document.getElementById("calender_type").style.display = "";
                    }
                }
            }
            
            function ShowLength(str){
                document.getElementById("inputlength").innerHTML = str.length + "文字";
            }
        </script>
    </body>
</html>