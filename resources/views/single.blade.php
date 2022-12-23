@extends('layouts.main')
@section('content')
<div class="jumbo">
    <img src="{{Vite::asset('resources/images/jumbotron.jpg')}}" alt="">
</div>
<div class="section-single">
<div class="cont-single-head-image">
    <div class="img-single-center">
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
    </div>

</div>
<div class="cont-all-single">
    <div class="content-single">
    <h3>Action Comics #1000: THE DELUXE EDITION</h3>
    <div class="single-price">
        <div class="sin-price-left">
            <p><span>U.S</span> $19.99</p>

            <p><span>Available</span></p>
        </div>
        <div class="sin-price-right">
        <p>Check Aviability</p>
        </div>
    </div>
    <div class="cont-single-desc">
        <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
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
        <p>Art by:</p>
        <p><span>Josue Luis Grazia Lopez</span> </p>
    </div>
    <div class="box-talent-left-2">
        <p>Written By:</p>
        <p> <span>Josue Luis Grazia Lopez</span> </p>
    </div>
</div>
<div class="single-t-right">
    <h3>Specs</h3>
    <div class="box-talent-right-1">
        <p>Series:</p>
        <p><span>Action Comics</span> </p>
    </div>
    <div class="box-talent-right-2">
       <p> U.S Price :</p>
        <p>$19:99</p>
    </div>
    <div class="box-talent-right-2">
        <p>On Sale Date:</p>
        <p>Oct 02 2018</p>
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
