@extends('layouts.main')
@section('content')
<div class="jumbo">
    <img src="{{Vite::asset('resources/images/jumbotron.jpg')}}" alt="">
</div>
<div class="section-single">
<div class="cont-single-head-image">
    <div class="img-single-center">
        <img src="{{ $single_filtered['thumb'] }}" alt="">
    </div>

</div>
<div class="cont-all-single">
    <div class="content-single">
    <h3>{{ $single_filtered['title'] }}</h3>
    <div class="single-price">
        <div class="sin-price-left">
            <p><span>U.S</span> {{ $single_filtered['price'] }}</p>

            <p><span>Available</span></p>
        </div>
        <div class="sin-price-right">
        <p>Check Aviability</p>
        </div>
    </div>
    <div class="cont-single-desc">
        <p>{!!$single_filtered['description']!!}</p>
    </div>
</div>
<div class="single-r-pic">
    <p>Adversement</p>
    <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="">
</div>
</div>

<div class="single-all">
  <div class="single-talent">
<div class="single-t-left">
    <h3>Talent</h3>
    <div class="box-talent-left-1">
        <div class="sep-sing-l">
            <p>Art by:</p>
        </div>
        <div class="sep-sing-r">
           <p><span>{{implode($single_filtered['artists'])}}</span></p>
        </div>
    </div>
    <div class="box-talent-left-2">
        <div class="sep-sing-l">
          <p>Written By:</p>
        </div>
        <div class="sep-sing-r">
            <p> <span>{{implode($single_filtered['writers'])}}</span> </p>
        </div>
    </div>
</div>
<div class="single-t-right">
    <h3>Specs</h3>
    <div class="box-talent-right-1">
        <p>Series:</p>
        <p><span>{{$single_filtered['series']}}</span> </p>
    </div>
    <div class="box-talent-right-2">
       <p> U.S Price :</p>
        <p>{{ $single_filtered['price'] }}</p>
    </div>
    <div class="box-talent-right-2">
        <p>On Sale Date:</p>
        <p>{{ $single_filtered['sale_date'] }}</p>
    </div>
</div>
</div>
</div>
</div>
<div class="last-elem-single">
    <div class="last-box"></div>
    <div class="last-box">
        <h3>Digital Comics</h3>
        <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
    </div>
    <div class="last-box">
        <h3>Shop Dc</h3>
        <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="">
    </div>
    <div class="last-box">
        <h3>Comic Shop Locator</h3>
        <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="">
    </div>
    <div class="last-box">
        <h3>Subscription</h3>
        <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="">
    </div>
    <div class="last-box"></div>
</div>

@endsection
