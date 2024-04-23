@extends('layouts.app')

@section('content')

<main>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-4">
                <div class="card">
                    <div class="card-title">
                        <h3> Title: {{$comic['title']}}</h3>
                    </div>
                    <div class="card-img">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>

                    <div class="card-body">
                        <p> Price: {{$comic['price']}}</p>
                        <p>Series: {{$comic['series']}}</p>
                        <p>Sale date: {{$comic['sale_date']}}</p>
                        <p>Type: {{$comic['type']}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</main>
@endsection