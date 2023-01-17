<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mayumura</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/dolls.css" rel="stylesheet">
    </head>
    
    <body>
        <h1>Mayumura SHOP</h1>
        <!--<h2>人形の個数</h2>
        <input id="number" type="number" value="1" min="1" max="3" step="1">
        -->
        <div id="doll">
            <h3>人形</h3>
            <div clss="category">
                <h3>カテゴリー</h3>
                <select id="dolls_type" onchange="DollsTypeCange();">
                    <option value="1">動物</option>
                    <option value="2">十二支</option>
                </select>
            </div>
            
            <h2>種類</h2>
            <div id="animal">
                <select id="animal_type" onchange="AnimalTypeCange();">
                    <option value="1">かめ</option>
                    <option value="2">ふくろう</option>
                </select>
                
                <div id="turtle">
                    <div class="turtle">
                        <div class="img_p">
                            <img src="img/turtle" alt="かめ画像" width="30%" head="30%">
                            <p>かめ</p>
                        </div>
                        
                        <div class="input">
                            <div><input type="radio" name="input_turtle" value="turtle">かめ</div>
                        </div>
                    </div>
                </div>
                
                <div id="owl" style="display:none">
                    <div class="owl">
                        <div class="img_p">
                            <img src="image/owl.jpg" alt="ふくろう画像" width="30%" height="30%">
                            <p>ふくろう</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_owl" value="owl">ふくろう</div>
                    </div>
                </div>
            </div>
            
            <dev id="zodiac" style="display:none">
       　  　     <select id="selbox" onchange="change();">
                    <option value="1">子（ねずみ）</option>
            　　      <option value="2">丑（うし）</option>
            　       <option value="3">寅（とら）</option>
            　　　     <option value="4">卯（うさぎ）</option>
            　       <option value="5">辰（龍）</option>
                    <option value="6">巳（へび）</option>
            　　      <option value="7">午（うま）</option>
            　　      <option value="8">未（ひつじ）</option>
            　　      <option value="9">申（さる）</option>
            　　      <option value="10">酉（とり）</option>
            　　      <option value="11">戌（いぬ）</option>
            　　　     <option value="12">亥（いのしし）</option>
            　　</select>
            　　
            　　<div id="mouse">
                    <div class="mouse">
                        <div class="img_p">
                            <img src="image/mouse_smile.jpg" alt="子（ねずみ・笑顔）" width="30%" height="30%">
                            <p>子（ねずみ・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_mouse" value="mouse_smile">子（ねずみ・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="cow" style="display:none">
                    <div class="cow">
                        <div class="img_p">
                            <img src="image/cow_smile.jpg" alt="丑（うし・笑顔）" width="30%" height="30%">
                            <p>丑（うし・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_cow" value="cow_smile">丑（うし・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="tiger" style="display:none">
                    <div class="tiger">
                        <div class="img_p">
                            <img src="image/tiger_smile.jpg" alt="寅（とら・笑顔）" width="30%" height="30%">
                            <p>寅（とら・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_tiger" value="tiger_smile">寅（とら・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="rabbit" style="display:none">
                    <div class="rabbit">
                        <div class="img_p">
                            <img src="image/rabbit_smile.jpg" alt="卯（うさぎ・笑顔）" width="30%" height="30%">
                            <p>卯（うさぎ・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_rabbit" value="rabbit_smile">卯（うさぎ・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="dragon" style="display:none">
                    <div class="dragon">
                        <div class="img_p">
                            <img src="image/dragon_smile.jpg" alt="辰（龍・笑顔）" width="30%" height="30%">
                            <p>辰（龍・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_dragon" value="dragon_smile">辰（龍・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="snake" style="display:none">
                    <div class="snake">
                        <div class="img_p">
                            <img src="image/snake_smile.jpg" alt="巳（へび・笑顔）" width="30%" height="30%">
                            <p>巳（へび・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_snake" value="snake_smile">巳（へび・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="horse" style="display:none">
                    <div class="horse">
                        <div class="img_p">
                            <img src="image/horse_smile.jpg" alt="午（うま・笑顔）" width="30%" height="30%">
                            <p>午（うま・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_horse" value="horse_smile">午（うま・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="sheep" style="display:none">
                    <div class="sheep">
                        <div class="img_p">
                            <img src="image/sheep_smile.jpg" alt="未（ひつじ・笑顔）" width="30%" height="30%">
                            <p>未（ひつじ・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_sheep" value="sheep_smile">未（ひつじ・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="monkey" style="display:none">
                    <div class="monkey">
                        <div class="img_p">
                            <img src="image/monkey_smile.jpg" alt="申（さる・笑顔）" width="30%" height="30%">
                            <p>申（さる・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_monkey" value="monkey_smile">申（さる・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="bird" style="display:none">
                    <div class="bird">
                        <div class="img_p">
                            <img src="image/bird_smile.jpg" alt="酉（とり・笑顔）" width="30%" height="30%">
                            <p>酉（とり・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_bird" value="bird_smile">酉（とり・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="dog" style="display:none">
                    <div class="dog">
                        <div class="img_p">
                            <img src="image/dog_smile.jpg" alt="戌（いぬ・笑顔）" width="30%" height="30%">
                            <p>戌（いぬ・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_dog" value="dog_smile">戌（いぬ・笑顔）</div>
                    </div>
            　　</div>
            　　
            　　<div id="boar" style="display:none">
                    <div class="boar">
                        <div class="img_p">
                            <img src="image/boar_smile.jpg" alt="亥（いのしし・笑顔）" width="30%" height="30%">
                            <p>亥（いのしし・笑顔）</p>
                        </div>
                    </div>
                    <div class="input">
                        <div><input type="radio" name="input_boar" value="boar_smile">亥（いのしし・笑顔）</div>
                    </div>
            　　</div>
        　　</div>
        </div>
        
        <a href="/"><button type="button">確定</button></a>
        
        <script>
            function DollsTypeCange(){
                if(document.getElementById("dolls_type"))
                {
                    selboxValue = document.getElementById("dolls_type").value;
                    if(selboxValue == "1"){
                        document.getElementById("zodiac").style.display = "none";
                        document.getElementById("animal").style.display = "";
                    }else if (selboxValue == "2"){
                        document.getElementById("zodiac").style.display = "";
                        document.getElementById("animal").style.display = "none";
                    }
                }
            }
            
            function AnimalTypeCange(){
                if(document.getElementById("animal_type"))
                {
                    selboxValue = document.getElementById("animal_type").value;
                    if(selboxValue == "1"){
                        document.getElementById("turtle").style.display = "";
                        document.getElementById("owl").style.display = "none";
                    }else if (selboxValue == "2"){
                        document.getElementById("turtle").style.display = "none";
                        document.getElementById("owl").style.display = "";
                    }
                }
            }
            
            function change(){
                if(document.getElementById("selbox"))
                {
                    selboxValue = document.getElementById("selbox").value;
                    if(selboxValue == "1"){
                        document.getElementById("mouse").style.display = "";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "2"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "3"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "4"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "5"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "6"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "7"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "8"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "9"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "10"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "11"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "";
                        document.getElementById("boar").style.display = "none";
                    }else if (selboxValue == "12"){
                        document.getElementById("mouse").style.display = "none";
                        document.getElementById("cow").style.display = "none";
                        document.getElementById("tiger").style.display = "none";
                        document.getElementById("rabbit").style.display = "none";
                        document.getElementById("dragon").style.display = "none";
                        document.getElementById("snake").style.display = "none";
                        document.getElementById("horse").style.display = "none";
                        document.getElementById("sheep").style.display = "none";
                        document.getElementById("monkey").style.display = "none";
                        document.getElementById("bird").style.display = "none";
                        document.getElementById("dog").style.display = "none";
                        document.getElementById("boar").style.display = "";
                        
                    }
                }
            }
        </script>
    </body>
</html>