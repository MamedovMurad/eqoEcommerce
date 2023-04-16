 <!--mini cart-->
 <div class="mini_cart">
    <div class="cart_close">
        <div class="cart_text">
            <h3>cart</h3>
        </div>
        <div class="mini_cart_close">
            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
        </div>
    </div>

    @if(session('cart'))
    @foreach(session('cart') as $id => $details)
    <div class="cart_item">
        <div class="cart_img">
            <a href="#"><img src="{{ asset($details['image'] )}}" alt=""></a>
        </div>
        <div class="cart_info">
            <a href="#">{{ $details['name'] }}</a>

            <span class="quantity">Qty: {{ $details['quantity'] }}</span>
            <span class="price_cart">{{ $details['price'] }}</span>

        </div>
        <div class="cart_remove">
            <a href="{{route('remove.from.cart',['id'=>$details['id']])}}"><i class="ion-android-close"></i></a>
        </div>
    </div>
    @endforeach
    @endif

    
  

    <div class="mini_cart_footer">
        <div class="cart_button">
            <a href="{{route('cart')}}">View cart</a>
        </div>
        <div class="cart_button">
            <a class="active" href="checkout.html">Checkout</a>
        </div>

    </div>

</div>
<!--mini cart end-->