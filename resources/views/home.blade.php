@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <div class="container-sm">

        <div class="row row-gap-3 text-center">
            @isset($movies)
                @forelse ($movies as $movie)
                    <div class="col-3">

                        @include('includes.movies.card')
                    </div>
                @empty
                    <div class="col-12">
                        <h2>Non ci sono film</h2>
                    </div>
                @endforelse
            @endisset
        </div>
    </div>
@endsection
