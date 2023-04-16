
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
                <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="{{$details['quantity']}}" type="number" 
                    oninput="setBasket('{{ $details['id'] }}',this.value)"></td>
                <td class="product_total">{{$details['price']*$details['quantity']}}</td>


            </tr>
            @endforeach
            @endif
          

        </tbody>
    </table>
