
<div class="cont-all-cards">
    <div class="cont-cards">
        @foreach ($cards as $card)
        <div class="card">
            <div class="cont-img">
                <img src="{{$card['thumb']}}" alt="">
            </div>
            <div class="cont-text">
                <h2>{{$card['title']}}</h2>
            </div>
        </div>
        @endforeach
    </div>
    <div class="btn-more">
        <a href="#">Load More</a>
    </div>
</div>
