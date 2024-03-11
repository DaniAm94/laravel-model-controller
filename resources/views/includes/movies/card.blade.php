<div class="card" style="min-height: 245px;">
    <div class="card-body d-flex flex-column justify-content-center ">
        <h5 class="card-title">{{ strtoupper($movie['title']) }}</h5>
        @if ($movie['title'] != $movie['original_title'])
            <h5 class="card-title">{{ strtoupper($movie['original_title']) }}</h5>
        @endif
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ strtoupper($movie['nationality']) }}</li>
        <li class="list-group-item">{{ $movie['date'] }}</li>
        <li class="list-group-item">{{ $movie['vote'] }}</li>
    </ul>
</div>
