@extends('client.app')

@section('content')

<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shop</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Detail Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid py-5">
    <form action="/add-cart" method="post" class="row px-xl-5">
       
       
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" style="with: 50px" src="{{$products->thumb}}" alt="Image">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">{{$products->name}}</h3>
            <br>
            <h3 class="font-weight-semi-bold mb-4">Giá : {{$products->price}} $</h3>
            {{-- <h3>Giá : {{$products->price}} $<span>{{$products->price_sale}}</span></h3> --}}

            <p class="mb-4">Mô tả sản phẩm :</p>
            <p class="mb-4">{{$products->description}}</p>
            <div class="product__details__cart__option">
                <div class="quantity">
                    <div class="pro-qty"><span class="fa fa-angle-up dec qtybtn"></span>
                        <input type="text" name="num_product" value="1">
                    <span class="fa fa-angle-down inc qtybtn"></span></div>
                </div>
                <a href="/client/carts/add"><button type="submit" class="primary-btn" > add to cart</button></a>
            </div>
        </div>
        <input type="hidden" name="product_id" value="{{ $products->id }}">
        @csrf
    </form>
</div>


@endsection