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
        <x-app-layout>
            <h1>Mayumura SHOP</h1>
            
            <form action="/board" method="GET">
                @csrf
                <div id="dolls">
                    <h2>人形１</h2>
                    <div clss="category">
                        <h3>カテゴリー</h3>
                        <select id="dolls_type" name="doll_category1" onchange="DollsTypeCange();">
                            <option value="動物">動物</option>
                            <option value="十二支">十二支</option>
                        </select>
                    </div>
                    
                    <h2>種類</h2>
                    <div id="animal">
                        
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
                                <div><input type="radio" name="doll_name1" value="ねこ（ノーマル）">ねこ（ノーマル）</div>
                                <div><input type="radio" name="doll_name1" value="ねこ（笑顔）">ねこ（笑顔）</div>
                            </div>
                        </div>
                        
                        <div id="turtle" >
                            <div class="turtle">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088547/turtle_o5laim.jpg" alt="かめ画像" width="30%" head="30%">
                                    <p>かめ（ノーマル）</p>
                                </div>
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088548/turtle_small_vdupgq.jpg" alt="かめ（小）画像" width="30%" head="30%">
                                    <p>かめ（小）</p>
                                </div>
                                <div class="input">
                                    <div><input type="radio" name="doll_name1" value="かめ（ノーマル）">かめ（ノーマル）</div>
                                    <div><input type="radio" name="doll_name1" value="かめ（小）">かめ（小）</div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="owl" >
                            <div class="owl">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088548/owl_i4anhp.jpg" alt="ふくろう画像" width="30%" height="30%">
                                    <p>ふくろう</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="ふくろう">ふくろう</div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="zodiac" style="display:none">
                    　　
                    　　<div id="mouse">
                            <div class="mouse">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088537/mouse_cvopzg.jpg" alt="子（ねずみ・ノーマル）" width="30%" height="30%">
                                    <p>子（ねずみ・ノーマル）</p>
                                </div>
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088536/mouse_smile_ds0yrf.jpg" alt="子（ねずみ・笑顔）" width="30%" height="30%">
                                    <p>子（ねずみ・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="子（ねずみ・ノーマル）">子（ねずみ・ノーマル）</div>
                                <div><input type="radio" name="doll_name1" value="子（ねずみ・笑顔">子（ねずみ・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="cow" >
                            <div class="cow">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088533/cow_smile_qsf1sp.jpg" alt="丑（うし・笑顔）" width="30%" height="30%">
                                    <p>丑（うし・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="丑（うし・笑顔">丑（うし・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="tiger" >
                            <div class="tiger">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088546/tiger_smile_qg39fk.jpg" alt="寅（とら・笑顔）" width="30%" height="30%">
                                    <p>寅（とら・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="寅（とら・笑顔">寅（とら・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="rabbit" >
                            <div class="rabbit">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088540/rabbit_iyubbe.jpg" alt="卯（うさぎ・ノーマル）" width="30%" height="30%">
                                    <p>卯（うさぎ・ノーマル）</p>
                                </div>
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088540/rabbit_smile_lndfwc.jpg" alt="卯（うさぎ・笑顔）" width="30%" height="30%">
                                    <p>卯（うさぎ・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="卯（うさぎ・ノーマル）">卯（うさぎ・ノーマル）</div>
                                <div><input type="radio" name="doll_name1" value="卯（うさぎ・笑顔）">卯（うさぎ・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="dragon" >
                            <div class="dragon">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088533/dragon_smile_jsvkmh.jpg" alt="辰（龍・笑顔）" width="30%" height="30%">
                                    <p>辰（龍・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="辰（龍・笑顔）">辰（龍・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="snake" >
                            <div class="snake">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088541/snake_huqkpy.jpg" alt="巳（へび・ノーマル）" width="30%" height="30%">
                                    <p>巳（へび・ノーマル）</p>
                                </div>
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088543/snake_smile_tulr7b.jpg" alt="巳（へび・笑顔）" width="30%" height="30%">
                                    <p>巳（へび・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="巳（へび・ノーマル）">巳（へび・ノーマル）</div>
                                <div><input type="radio" name="doll_name1" value="巳（へび・笑顔）">巳（へび・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="horse" >
                            <div class="horse">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088536/horse_smile_wcfnwb.jpg" alt="午（うま・笑顔）" width="30%" height="30%">
                                    <p>午（うま・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="午（うま・笑顔）">午（うま・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="sheep" >
                            <div class="sheep">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088541/sheep_smile_dkvmfc.jpg" alt="未（ひつじ・笑顔）" width="30%" height="30%">
                                    <p>未（ひつじ・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="未（ひつじ・笑顔）">未（ひつじ・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="monkey" >
                            <div class="monkey">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088540/monkey_lzowd8.jpg" alt="申（さる・ノーマル）" width="30%" height="30%">
                                    <p>申（さる・ノーマル）</p>
                                </div>
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088537/monkey_smile_gifsp3.jpg" alt="申（さる・笑顔）" width="30%" height="30%">
                                    <p>申（さる・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="申（さる・ノーマル）">申（さる・ノーマル）</div>
                                <div><input type="radio" name="doll_name1" value="申（さる・笑顔）">申（さる・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="bird" >
                            <div class="bird">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088548/bird_smile_vwfokl.jpg" alt="酉（とり・笑顔）" width="30%" height="30%">
                                    <p>酉（とり・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="酉（とり・笑顔）">酉（とり・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="dog" >
                            <div class="dog">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088533/dog_gnzt2g.jpg" alt="戌（いぬ・ノーマル）" width="30%" height="30%">
                                    <p>戌（いぬ・ノーマル）</p>
                                </div>
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088534/dog_smile_sb8f0v.jpg" alt="戌（いぬ・笑顔）" width="30%" height="30%">
                                    <p>戌（いぬ・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="戌（いぬ・ノーマル）">戌（いぬ・ノーマル）</div>
                                <div><input type="radio" name="doll_name1" value="戌（いぬ・笑顔）">戌（いぬ・笑顔）</div>
                            </div>
                    　　</div>
                    　　
                    　　<div id="boar" >
                            <div class="boar">
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088549/boar_npaoqf.jpg" alt="亥（いのしし・ノーマル）" width="30%" height="30%">
                                    <p>亥（いのしし・ノーマル）</p>
                                </div>
                                <div class="img_p">
                                    <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088549/boar_smile_gi3i44.jpg" alt="亥（いのしし・笑顔）" width="30%" height="30%">
                                    <p>亥（いのしし・笑顔）</p>
                                </div>
                            </div>
                            <div class="input">
                                <div><input type="radio" name="doll_name1" value="亥（いのしし・ノーマル）">亥（いのしし・ノーマル）</div>
                                <div><input type="radio" name="doll_name1" value="亥（いのしし・笑顔）">亥（いのしし・笑顔）</div>
                            </div>
                    　　</div>
                　　</div>
                　　
                </div>
                <input type="hidden" name="doll_category2" value="{{$doll_category2}}"/>
                <input type="hidden" name="doll_name2" value="{{$doll_name2}}"/>
                
                <input type="submit" value="確定"/>
            </form>
            
            
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
                
                
                
                
            </script>
        </x-app-layout>
    </body>
</html>