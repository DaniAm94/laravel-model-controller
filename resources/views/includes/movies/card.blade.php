<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $movie['title'] }}</h5>
        <h5 class="card-title">{{ $movie['original_title'] }}</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $movie['nationality'] }}</li>
        <li class="list-group-item">{{ $movie['date'] }}</li>
        <li class="list-group-item">{{ $movie['vote'] }}</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Details</a>
    </div>
</div>
