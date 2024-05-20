@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')



    {{-- main conten --}}
    <div>
        <!-- SLIDER -->
        <div class="slider">
            <img src="./Img/slider.webp" class="slider-img" alt="">
        </div>

        <!-- PRODUCT CATEGORY -->
        <section class="product-category">
        </section>

        <!-- PRODUCT NEW -->
        <section class="product-new">
        </section>

        <!-- PRODUCT SALE -->
        <section class="product-sale">
        </section>

        <!-- POST NEW -->
        <section class="post-new">
        </section>


    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
