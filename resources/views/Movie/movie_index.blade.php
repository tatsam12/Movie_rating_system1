@section('content')
    <h1>ALl movies
        <a href = "{{route('movies.create') }}" class = "btn btn-primar"></a>

    </h1>
    <p>No movies</p>


    @foreach($movies as $movie)
        <div class = "card">
            <img arc = "{{$movie-> image}}" class = "card-image-top">
            <div class = "card-body">
                <h1>{{$movie->title}}</h1>

            </div>
        </div>
    @endforeach

@endsection
