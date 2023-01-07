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
        <dev class="basis">
            <h2>土台</h2>
            <select id="selbox" onchange="change();">
                <option value="1">木板</option>
                <option value="2">色紙</option>
                <option value="3">吊るし</option>
                <option value="4">カレンダー</option>
            </select>
            <p id="txt1">木板</p>
            <p id="txt2" style="display:none">色紙</p>
            <p id="txt3" style="display:none">吊るし</p>
            <p id="txt4" style="display:none">カレンダー</p>
            </dev>
            <dev class="message">
                <h2>メッセージ</h2>
                <input type="text" id="mes1" maxlength="10">
                <p id="caution1">※10文字以内</p>
                <input type="text" id="mes2" maxlength="20" style="display:none">
                <p id="caution2" style="display:none">※20文字以内</p>
            </dev>
            <dev class="comment">
                <h3>コメント・要望</h3>
                <textarea cols="24" rows="3" placeholder="200文字以下でお願いします" maxlength="200" onkeyup="ShowLength(value);"></textarea>
                <p id="inputlength">0文字</p>
            </dev>
            <button type="button">next</button>
        </dev>
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
                    } else if (selboxValue == "2"){
                        document.getElementById("txt2").style.display = "";
                        document.getElementById("txt1").style.display = "none";
                        document.getElementById("txt3").style.display = "none";
                        document.getElementById("txt4").style.display = "none";
                        document.getElementById("mes2").style.display = "";
                        document.getElementById("mes1").style.display = "none";
                        document.getElementById("caution1").style.display = "none";
                        document.getElementById("caution2").style.display = "";
                    } else if (selboxValue == "3"){
                        document.getElementById("txt3").style.display = "";
                        document.getElementById("txt1").style.display = "none";
                        document.getElementById("txt2").style.display = "none";
                        document.getElementById("txt4").style.display = "none";
                        document.getElementById("mes2").style.display = "none";
                        document.getElementById("mes1").style.display = "none";
                        document.getElementById("caution1").style.display = "none";
                        document.getElementById("caution2").style.display = "none";
                    } else if (selboxValue == "4"){
                        document.getElementById("txt4").style.display = "";
                        document.getElementById("txt1").style.display = "none";
                        document.getElementById("txt2").style.display = "none";
                        document.getElementById("txt3").style.display = "none";
                        document.getElementById("mes2").style.display = "";
                        document.getElementById("mes1").style.display = "none";
                        document.getElementById("caution1").style.display = "none";
                        document.getElementById("caution2").style.display = "";
                    }
                }
            }
            
            function ShowLength(str){
                document.getElementById("inputlength").innerHTML = str.length + "文字";
            }
        </script>
    </body>
</html>