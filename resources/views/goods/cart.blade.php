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
        <h2>カート</h2>
        
            @php
                $total = 0;
                $num = 0;
            @endphp
            @foreach($goods as $good)
                @php
                    $num += 1;
                @endphp
                <p>{{$num}}</p>
                <a href="/show/{{$good->id}}"><p>{{$good->basis_category}}:{{$good->basis_name}}</p></a>
                <p>{{$good->price->price}}円</p>
                @php
                    $total += $good->price->price;
                @endphp
                <form action="/cart/{{$good->id}}" id="form_{{$good->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteGoods({{$good->id}})">削除</button>
                </form>
            @endforeach
            
            <h2>合計金額</h2>
            <p>{{$total}}円</p>
            
            <form action="{{ asset('pay') }}" method="POST">
                @csrf
            <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ env('STRIPE_KEY') }}"
                data-amount="{{$total}}"
                data-name="まゆ村 嵐山店 商品購入"
                data-billingAddress=true
                data-shippingAddress=true
                data-label="決済をする"
                data-description="商品を購入する"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-currency="JPY">
            </script>
            <input type="hidden" name="total" value="{{$total}}">
            </form>
            <a href="/"><button>トップへ</button></a>
        <script>
            
        function deleteGoods(id) {
            'use strict'
    
            if (confirm('本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
    </body>
</html>