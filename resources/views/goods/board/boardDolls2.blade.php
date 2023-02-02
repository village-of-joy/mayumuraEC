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
        
        <form action="/board" method="GET">
            @csrf
            <div id="dolls">
                <h2>人形２</h2>
                <div clss="category">
                    <h3>カテゴリー</h3>
                    <select id="dolls_type" name="doll_category2" onchange="DollsTypeCange();">
                        <option value="動物">動物</option>
                        <option value="十二支">十二支</option>
                    </select>
                </div>
                
                <h2>種類</h2>
                <div id="animal">
                    <select id="animal_type" onchange="AnimalTypeCange();">
                        <option value="1">ねこ</option>
                        <option value="2">かめ</option>
                        <option value="3">ふくろう</option>
                    </select>
                    
                    <div id="cat">
                        <div class="cat">
                            <div class="img_p">
                                <img src="image/cat_smile.JPG" alt="ねこ画像" width="30%" height="30%">
                                <p>ねこ（ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/cat_smile.JPG" alt="ねこ（笑顔）画像" width="30%" height="30%">
                                <p>ねこ（笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="ねこ（ノーマル）">ねこ（ノーマル）</div>
                            <div><input type="radio" name="input4" value="ねこ（笑顔）">ねこ（笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="cat">ねこ（ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="cat_smile">ねこ（笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                    </div>
                    
                    <div id="turtle" style="display:none">
                        <div class="turtle">
                            <div class="img_p">
                                <img src="image/turtle_small.JPG" alt="かめ画像" width="30%" head="30%">
                                <p>かめ</p>
                            </div>
                            <div class="input">
<<<<<<< HEAD
                                <div><input type="radio" name="input4" value="かめ（小）">かめ（小）</div>
=======
                                <div><input type="radio" name="doll_name2" value="turtle">かめ</div>
>>>>>>> origin/dev_basis10
                            </div>
                        </div>
                    </div>
                    
                    <div id="owl" style="display:none">
                        <div class="owl">
                            <div class="img_p">
                                <img src="image/owl.JPG" alt="ふくろう画像" width="30%" height="30%">
                                <p>ふくろう</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="ふくろう">ふくろう</div>
=======
                            <div><input type="radio" name="doll_name2" value="owl">ふくろう</div>
>>>>>>> origin/dev_basis10
                        </div>
                    </div>
                </div>
                
                <div id="zodiac" style="display:none">
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
                                <img src="image/mouse.JPG" alt="子（ねずみ・ノーマル）" width="30%" height="30%">
                                <p>子（ねずみ・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/mouse_smile.JPG" alt="子（ねずみ・笑顔）" width="30%" height="30%">
                                <p>子（ねずみ・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="子（ねずみ・ノーマル）">子（ねずみ・ノーマル）</div>
                            <div><input type="radio" name="input4" value="子（ねずみ・笑顔）">子（ねずみ・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="mouse">子（ねずみ・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="mouse_smile">子（ねずみ・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="cow" style="display:none">
                        <div class="cow">
                            <div class="img_p">
                                <img src="image/cow.JPG" alt="丑（うし・ノーマル）" width="30%" height="30%">
                                <p>丑（うし・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/cow_smile.JPG" alt="丑（うし・笑顔）" width="30%" height="30%">
                                <p>丑（うし・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="丑（うし・ノーマル）">丑（うし・ノーマル）</div>
                            <div><input type="radio" name="input4" value="丑（うし・笑顔）">丑（うし・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="cow">丑（うし・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="cow_smile">丑（うし・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="tiger" style="display:none">
                        <div class="tiger">
                            <div class="img_p">
                                <img src="image/tiger.JPG" alt="寅（とら・ノーマル）" width="30%" height="30%">
                                <p>寅（とら・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/tiger_smile.JPG" alt="寅（とら・笑顔）" width="30%" height="30%">
                                <p>寅（とら・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="寅（とら・ノーマル）">寅（とら・ノーマル）</div>
                            <div><input type="radio" name="input4" value="寅（とら・笑顔・黄色）">寅（とら・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="tiger">寅（とら・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="tiger_smile">寅（とら・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="rabbit" style="display:none">
                        <div class="rabbit">
                            <div class="img_p">
                                <img src="image/rabbit.JPG" alt="卯（うさぎ・ノーマル）" width="30%" height="30%">
                                <p>卯（うさぎ・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/rabbit_smile.JPG" alt="卯（うさぎ・笑顔）" width="30%" height="30%">
                                <p>卯（うさぎ・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="卯（うさぎ・ノーマル）">卯（うさぎ・ノーマル）</div>
                            <div><input type="radio" name="input4" value="卯（うさぎ・笑顔）">卯（うさぎ・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="rabbit">卯（うさぎ・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="rabbit_smile">卯（うさぎ・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="dragon" style="display:none">
                        <div class="dragon">
                            <div class="img_p">
                                <img src="image/dragon.JPG" alt="辰（龍・ノーマル）" width="30%" height="30%">
                                <p>辰（龍・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/dragon_smile.JPG" alt="辰（龍・笑顔）" width="30%" height="30%">
                                <p>辰（龍・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="辰（龍・ノーマル）">辰（龍・ノーマル）</div>
                            <div><input type="radio" name="input4" value="辰（龍・笑顔）">辰（龍・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="dragon">辰（龍・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="dragon_smile">辰（龍・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="snake" style="display:none">
                        <div class="snake">
                            <div class="img_p">
                                <img src="image/snake.JPG" alt="巳（へび・ノーマル）" width="30%" height="30%">
                                <p>巳（へび・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/snake_smile.JPG" alt="巳（へび・笑顔）" width="30%" height="30%">
                                <p>巳（へび・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="巳（へび・ノーマル）">巳（へび・ノーマル）</div>
                            <div><input type="radio" name="input4" value="巳（へび・笑顔）">巳（へび・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="snake">巳（へび・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="snake_smile">巳（へび・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="horse" style="display:none">
                        <div class="horse">
                            <div class="img_p">
                                <img src="image/horse.JPG" alt="午（うま・ノーマル）" width="30%" height="30%">
                                <p>午（うま・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/horse_smile.JPG" alt="午（うま・笑顔）" width="30%" height="30%">
                                <p>午（うま・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="午（うま・ノーマル）">午（うま・ノーマル）</div>
                            <div><input type="radio" name="input4" value="午（うま・笑顔）">午（うま・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="horse">午（うま・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="horse_smile">午（うま・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="sheep" style="display:none">
                        <div class="sheep">
                            <div class="img_p">
                                <img src="image/sheep.JPG" alt="未（ひつじ・ノーマル）" width="30%" height="30%">
                                <p>未（ひつじ・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/sheep_smile.JPG" alt="未（ひつじ・笑顔）" width="30%" height="30%">
                                <p>未（ひつじ・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="未（ひつじ・ノーマル）">未（ひつじ・ノーマル）</div>
                            <div><input type="radio" name="input4" value="未（ひつじ・笑顔）">未（ひつじ・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="sheep">未（ひつじ・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="sheep_smile">未（ひつじ・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="monkey" style="display:none">
                        <div class="monkey">
                            <div class="img_p">
                                <img src="image/monkey.JPG" alt="申（さる・ノーマル）" width="30%" height="30%">
                                <p>申（さる・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/monkey_smile.JPG" alt="申（さる・笑顔）" width="30%" height="30%">
                                <p>申（さる・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="申（さる・ノーマル）">申（さる・ノーマル）</div>
                            <div><input type="radio" name="input4" value="申（さる・笑顔）">申（さる・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="monkey">申（さる・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="monkey_smile">申（さる・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="bird" style="display:none">
                        <div class="bird">
                            <div class="img_p">
                                <img src="image/bird.JPG" alt="酉（とり・ノーマル）" width="30%" height="30%">
                                <p>酉（とり・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/bird_smile.JPG" alt="酉（とり・笑顔）" width="30%" height="30%">
                                <p>酉（とり・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="酉（とり・ノーマル）">酉（とり・ノーマル）</div>
                            <div><input type="radio" name="input4" value="酉（とり・笑顔）">酉（とり・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="bird">酉（とり・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="bird_smile">酉（とり・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="dog" style="display:none">
                        <div class="dog">
                            <div class="img_p">
                                <img src="image/dog.JPG" alt="戌（いぬ・ノーマル）" width="30%" height="30%">
                                <p>戌（いぬ・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/dog_smile.JPG" alt="戌（いぬ・笑顔）" width="30%" height="30%">
                                <p>戌（いぬ・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="戌（いぬ・ノーマル）">戌（いぬ・ノーマル）</div>
                            <div><input type="radio" name="input4" value="戌（いぬ・笑顔）">戌（いぬ・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="dog">戌（いぬ・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="dog_smile">戌（いぬ・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
                　　
                　　<div id="boar" style="display:none">
                        <div class="boar">
                            <div class="img_p">
                                <img src="image/boar.JPG" alt="亥（いのしし・ノーマル）" width="30%" height="30%">
                                <p>亥（いのしし・ノーマル）</p>
                            </div>
                            <div class="img_p">
                                <img src="image/boar_smile.JPG" alt="亥（いのしし・笑顔）" width="30%" height="30%">
                                <p>亥（いのしし・笑顔）</p>
                            </div>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <div><input type="radio" name="input4" value="亥（いのしし・ノーマル）">亥（いのしし・ノーマル）</div>
                            <div><input type="radio" name="input4" value="亥（いのしし・笑顔）">亥（いのしし・笑顔）</div>
=======
                            <div><input type="radio" name="doll_name2" value="boar">亥（いのしし・ノーマル）</div>
                            <div><input type="radio" name="doll_name2" value="boar_smile">亥（いのしし・笑顔）</div>
>>>>>>> origin/dev_basis10
                        </div>
                　　</div>
            　　</div>
            　　
            　　
            　　
            </div>
<<<<<<< HEAD
            <input type="hidden" name="input1" value="{{$input1}}"/>
            <input type="hidden" name="input2" value="{{$input2}}"/>
=======
            <input type="hidden" name="doll_category1" value="{{$doll_category1}}"/>
            <input type="hidden" name="doll_name1" value="{{$doll_name1}}"/>
>>>>>>> origin/dev_basis10
            
            <input type="submit" value="確定"/>
        </form>
        
        <a href="/board"><button>戻る</button></a>
        
        <script>
            function DollsTypeCange(){
                if(document.getElementById("dolls_type"))
                {
                    selboxValue = document.getElementById("dolls_type").value;
                    if(selboxValue == "動物"){
                        document.getElementById("zodiac").style.display = "none";
                        document.getElementById("animal").style.display = "";
                    }else if (selboxValue == "十二支"){
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
                        document.getElementById("cat").style.display = "";
                        document.getElementById("turtle").style.display = "none";
                        document.getElementById("owl").style.display = "none";
                    }else if (selboxValue == "2"){
                        document.getElementById("cat").style.display = "none";
                        document.getElementById("turtle").style.display = "";
                        document.getElementById("owl").style.display = "none";
                    }else if (selboxValue == "3"){
                        document.getElementById("cat").style.display = "none";
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