  @extends('front.layouts.index')

 @section('content')
 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="shopping_cart_area mt-32">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive" id="cart_page">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0 @endphp
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                    <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                        <td class="product_thumb"><a href="#"><img src="{{ asset($details['image'] )}}" alt=""></a></td>
                                        <td class="product_name"><a href="#">{{ $details['name'] }}</a></td>
                                        <td class="product-price">{{ $details['price'] }}</td>
                                        <td class="product_quantity"><label>Quantity</label> 
                                            <input min="1" max="100" value="{{$details['quantity']}}" type="number"
                                            oninput="setBasket('{{ $details['id'] }}',this.value)">
                                        </td>
                                        <td class="product_total">{{$details['price']*$details['quantity']}}</td>


                                    </tr>
                                    @endforeach
                                    @endif
                                  

                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button type="submit">update cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">{{ $total }}</p>
                                </div>
                                {{-- <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                </div> --}}
                                {{-- <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">£215.00</p>
                                </div> --}}
                                <div class="checkout_btn">
                                    <a href="#">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form>
    </div>
</div>
<!--shopping cart area end -->





@endsection

@section('js')
    <script>
           
         function setBasket(id, quantity) {
    //         console.log(id, quantity);
    //         $.ajax({
    //             url: '{{ route("update.cart") }}',
    //             method: "POST",
    //             contentType: 'application/json',
    // data: JSON.stringify({
    //     _METHOD:'PUT',
    //                 _token: '{{ csrf_token() }}', 
    //                 id: id,
    //                 quantity
    //             }),
              
    //             success: function (response) {
    //                console.log(response);
    //             }
    //         });



            $.ajax({
    url: '{{ route("update.cart") }}',
    type: "PUT",
    contentType: "application/json",
    data: JSON.stringify({
        
                   _token: '{{ csrf_token() }}', 
                   id: id,
                    quantity
                }),
    
    success: function (response) {
        console.log(response);
                  $('#cart_page').html(response.html);
                  $('.cart_amount').html(response.total)
                }
    
});



         }
        
    </script>
@endsection