
<div class="over-header">
    <div class="cont-over-header">
        <p>Dc power Visa</p>
        <p>Additional Dc Sites</p>
    </div>
</div>
<header class="">
<div class="cont-header">
    <div class="cont-logo">
      <a href="{{route('home')}}"><img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt=""></a>
    </div>
    <div class="cont-link">
        <ul>
            <li><a class="{{Route::currentRouteName() == 'characters' ? 'active' : ''}}" href="{{route('characters')}}">Characters</a></li>
            <li><a class="{{Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{route('comics')}}">Comics</a></li>
            <li><a class="{{Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{route('movies')}}">Movies</a></li>
            <li><a class="{{Route::currentRouteName() == 'tv' ? 'active' : ''}}" href="{{route('tv')}}">Tv</a></li>
            <li><a class="{{Route::currentRouteName() == 'games' ? 'active' : ''}}" href="{{route('games')}}">Games</a></li>
            <li><a class="{{Route::currentRouteName() == 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">Collectibles</a></li>
            <li><a class="{{Route::currentRouteName() == 'videos' ? 'active' : ''}}" href="{{route('videos')}}">Videos</a></li>
            <li><a class="{{Route::currentRouteName() == 'fans' ? 'active' : ''}}" href="{{route('fans')}}">Fans</a></li>
            <li><a class="{{Route::currentRouteName() == 'news' ? 'active' : ''}}" href="{{route('news')}}">News</a></li>
            <li><a class="{{Route::currentRouteName() == 'shop' ? 'active' : ''}}" href="{{route('shop')}}">Shop</a></li>
        </ul>
        <input type="text" placeholder="&#x1F50D; Search">
    </div>
</div>
</header>
