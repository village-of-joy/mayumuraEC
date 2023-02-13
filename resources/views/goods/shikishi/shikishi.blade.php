<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>まゆ村 色紙購入</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/goods.css" rel="stylesheet">
    </head>
    
    <body>
        <x-app-layout>
            <h1>まゆ村 嵐山店</h1>
                <div class="basis">
                    <h2 class="bases">土台（色紙）</h2>
                </div>
                
                <div class="dolls">
                    <h2>人形</h2>
                    <div>
                        <h3>人形１</h3>
                        <p>{{$doll_category1}}</p>
                        <p>{{$doll_name1}}</p>
                        <form action="/shikishiDolls1" method="GET">
                            @csrf
                            <input type="submit" value="追加">
                            <input type="hidden" name="doll_category2" value="{{$doll_category2}}"/>
                            <input type="hidden" name="doll_name2" value="{{$doll_name2}}"/>
                        </form>
                        <p class="body__error" style="color:red">{{ $errors->first('goods.doll_category1') }}</p>
                    </div>
                    <div>
                        <h3>人形２</h3>
                        <p>{{$doll_category2}}</p>
                        <p>{{$doll_name2}}</p>
                        <form action="/shikishiDolls2" method="GET">
                            @csrf
                            <input type="submit" value="追加">
                            <input type="hidden" name="doll_category1" value="{{$doll_category1}}"/>
                            <input type="hidden" name="doll_name1" value="{{$doll_name1}}"/>
                        </form>
                    </div>
                </div>
            </form>
            
            <form action="/varif" method="POST">
                @csrf
                <input type="hidden" name="goods[basis_category]" value="色紙" />   
                
                <div class="basis_name">
                    <div id="board_type">
                        <h2>土台（種類）</h2>
                        <div class="borad_img">
                            <div class="img_p">
                                <p>ノーマル</p>
                                <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088544/taketatu_dh6m4m.jpg" alt="色紙ノーマル画像" width="30%" height="30%">
                            </div>
                            <div class="img_p">
                                <p>竹立</p>
                                <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088544/taketatu_dh6m4m.jpg" alt="色紙竹立画像" width="30%" height="30%">
                            </div>
                            <div class="img_p">
                                <p>竹三角</p>
                                <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088544/takesankaku_gl5ny3.jpg" alt="色紙竹三角画像" width="30%" height="30%">
                            </div>
                            <div class="img_p">
                                <p>竹ばさみ</p>
                                <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088544/takebasami_s0jjrj.jpg" alt="色紙竹ばさみ画像" width="30%" height="30%">
                            </div>
                            <div class="img_p">
                                <p>扇面</p>
                                <img src="https://res.cloudinary.com/dsnxdprqj/image/upload/v1676088540/ougimen_en9wzr.jpg" alt="色紙扇面画像" width="30%" height="30%">
                            </div>    
                        </div>
                        <div class="input_basis">
                            <div><input type="radio" name="goods[basis_name]" value="ノーマル" >ノーマル</div>
                            <div><input type="radio" name="goods[basis_name]" value="竹立" >竹立</div>
                            <div><input type="radio" name="goods[basis_name]" value="竹三角" >竹三角</div>
                            <div><input type="radio" name="goods[basis_name]" value="竹ばさみ" >竹ばさみ</div>
                            <div><input type="radio" name="goods[basis_name]" value="扇面" >扇面</div>
                            <p class="body__error" style="color:red">{{ $errors->first('goods.basis_name') }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="message">
                    <h2>メッセージ</h2>
                    <input type="text" name="goods[message]" id="textmes" maxlength="20" onkeyup="ShowLength1(value);" >
                    <p class="caution">※10文字程度でお願いします</p>
                    <p id="inputlength1">0文字</p>
                </div>
                
                <div class="comment">
                    <h2>コメント・要望</h2>
                    <textarea name="goods[comment]" cols="24" rows="3" placeholder="200文字以下でお願いします" maxlength="200" onkeyup="ShowLength2(value);" ></textarea>
                    <p id="inputlength2">0文字</p>
                </div>
                
                <input type="hidden" name="goods[doll_category1]" value="{{$doll_category1}}"/>
                <input type="hidden" name="goods[doll_name1]" value="{{$doll_name1}}"/>
                <input type="hidden" name="goods[doll_category2]" value="{{$doll_category2}}"/>
                <input type="hidden" name="goods[doll_name2]" value="{{$doll_name2}}"/>
                
                <input type="submit" value="確認" />
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
        </x-app-layout>
    </body>
</html>