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
            <div class="basis">
                <h2 class="bases">土台（木板）</h2>
            </div>
<<<<<<< HEAD
=======
            
            <div class="dolls">
                <h2>人形</h2>
                <div>
                    <h3>人形１</h3>
                    <p>{{$doll_category1}}</p>
                    <p>{{$doll_name1}}</p>
                    <form action="/boardDolls1" method="GET">
                        <input type="submit" value="追加">
                        <input type="hidden" name="doll_category2" value="{{$doll_category2}}"/>
                        <input type="hidden" name="doll_name2" value="{{$doll_name2}}"/>
                    </form>
                </div>
                <div>
                    <h3>人形２</h3>
                    <p>{{$doll_category2}}</p>
                    <p>{{$doll_name2}}</p>
                    <form action="/boardDolls2" method="GET">
                        <input type="submit" value="追加">
                        <input type="hidden" name="doll_category1" value="{{$doll_category1}}"/>
                        <input type="hidden" name="doll_name1" value="{{$doll_name1}}"/>
                    </form>
                </div>
            </div>
        </form>
>>>>>>> origin/dev_basis10
        
            <form action="/boardDolls1" method="POST">
                @csrf
                <input type="hidden" name="goods[basis_category]" value="木板" />   
                
                <div class="basis_name">
                    <div id="board_type">
                        <h2>土台（種類）</h2>
                        <div class="borad_img">
                            <div class="img_p">
                                <p>ノーマル</p>
                                <img src="image/board.JPG" alt="木板ノーマル画像" width="30%" height="30%">
                            </div>
                            <div class="img_p">
                                <p>ブランコ</p>
                                <img src="image/branko.JPG" alt="木板ブランコ画像" width="30%" height="30%">
                            </div>    
                        </div>
                        <div class="input_basis">
                            <div><input type="radio" name="goods[basis_name]" value="ノーマル" {{ old('goods.basis_name') === 'ノーマル' ? 'checked' : '' }}>ノーマル</div>
                            <div><input type="radio" name="goods[basis_name]" value="ブランコ" {{ old('goods.basis_name') === 'ブランコ' ? 'checked' : '' }}>ブランコ</div>
                            <p class="title_error" style="color:red">{{ $errors->first('goods.basis_name')}}</p>
                        </div>
                    </div>
                </div>
                
                <div class="message">
                    <h2>メッセージ</h2>
                    <input type="text" name="goods[message]" id="textmes" value="{{old('goods[message]')}}" maxlength="20" onkeyup="ShowLength1(value);" >
                    <p class="caution">※10文字程度でお願いします</p>
                    <p id="inputlength1">0文字</p>
                </div>
                
                <div class="comment">
                    <h2>コメント・要望</h2>
                    <textarea name="goods[comment]" cols="24" rows="3" placeholder="200文字以下でお願いします" maxlength="200" onkeyup="ShowLength2(value);" >{{old('goods[comment]')}}</textarea>
                    <p id="inputlength2">0文字</p>
                </div>
                
                <input type="submit" value="人形選択" />
                
            </form>
            
<<<<<<< HEAD
            <a href="/"><button type="button">戻る</button></a>
=======
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
>>>>>>> origin/dev_basis10
            
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