
@extends('client.app')

@section('content')

<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="/home">Home</a>
                        <a href="product/shop">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<form action="" method="POST">
    
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    {{-- @if(count($products != 0)) --}}
                    @php $total = 0; @endphp
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)
                            @php  
                                $price = $product->price_sale !==0 ? $product->price_sale : $product->price;
                                $priceEnd = $price * $carts[$product->id];
                                $total += $priceEnd;
                            @endphp
                                <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="{{$product->thumb}}" style="width: 100px" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{$product->name}}</h6>
                                        <h5>${{$price}}</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" name="num_product[{{$product->id}}]" value="{{$carts[$product->id]}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ {{$priceEnd}}</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                        {{-- @else
                            
                        <div class="text-center"> <h2> Gio hang trong</h2></div>
                    @endif --}}
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="#">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                           <input type="submit" value="uploast" formaction="/upload-cart"> <i class="fa fa-spinner"></i> 
                            @csrf
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        {{-- <li>Subtotal <span>$ 169.50</span></li> --}}
                        <li>Total <span>$ {{$total}}</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
<!-- Shopping Cart Section End -->

@endsection