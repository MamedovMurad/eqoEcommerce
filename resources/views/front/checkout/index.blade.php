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
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!--Checkout page section-->
<div class="Checkout_section mt-32">
    <form action="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="user-actions">
                    
                     <div id="checkout_login" class="collapse" data-parent="#accordion">
                        <div class="checkout_info">
                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>  
                            <form action="#">  
                                <div class="form_group">
                                    <label>Username or email <span>*</span></label>
                                    <input type="text">     
                                </div>
                                <div class="form_group">
                                    <label>Password  <span>*</span></label>
                                    <input type="text">     
                                </div> 
                                <div class="form_group group_3 ">
                                    <button type="submit">Login</button>
                                    <label for="remember_box">
                                        <input id="remember_box" type="checkbox">
                                        <span> Remember me </span>
                                    </label>     
                                </div>
                                <a href="#">Lost your password?</a>
                            </form>          
                        </div>
                    </div>    
                </div>
                
            </div>
        </div>
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    
                        <h3>Billing Details</h3>
                        <div class="row">

                            <div class="col-lg-6 mb-20">
                                <label>Tam ad <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Telefon <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Email <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Qeyd</label>
                                <textarea name="" style="width:100%; height:90px"></textarea>
                               
                             {{--    <input type="text"> --}}
                            </div>
                          
                          
                            <div class="col-6 mb-20">
                                <input id="address" type="checkbox" data-target="createp_account" />
                                <label class="righ_0" for="address" aria-controls="collapsetwo">Götürmə</label>

                             
                            </div>
                            <div class="col-6 mb-20">
                                <input id="address-1" type="checkbox" data-target="createp_account" />
                                <label class="righ_0" for="address" aria-controls="collapsetwo">Nağd pul</label>

                             
                            </div>
                            
                        </div>
                   
                </div>
                <div class="col-lg-6 col-md-6">
                  
                        <h3>Your order</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0 @endphp
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                    <tr>
                                        <td> {{ $details['name'] }} <strong> × {{ $details['quantity'] }}</strong></td>
                                        <td>{{$details['price']*$details['quantity']}}</td>
                                    </tr>
                                  @endforeach
                                  @endif
                                </tbody>
                                <tfoot>
                                    {{-- <tr>
                                        <th>Cart Subtotal</th>
                                        <td>$215.00</td>
                                    </tr> --}}
                                  {{--   <tr>
                                        <th>Shipping</th>
                                        <td><strong>$5.00</strong></td>
                                    </tr> --}}
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>{{$total}}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                       
                   
                </div>
            </div>
        </div>
        <div class="cart_submit">
            <button type="submit">Sifariş et</button>
        </div>
    </div>
</form>
</div>
<!--Checkout page section end-->
@endsection