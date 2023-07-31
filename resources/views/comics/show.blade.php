@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row info_comic">
        <div class="col-6 col-md-4 ">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
        </div>
        <div class="col-12 col-md-8 text-white">
            <h1>{{ $comic->title }}</h1>
            <h3 class="text-danger">{{ $comic->series }}</h3>
            <div>Price: <span class="text-success fw-semibold">${{ $comic->price }}</span></div>
            <div>Date: {{date("M d Y", strtotime($comic['sale_date']))}}</div>
            <h4 class="my-2">Description:</h4>
            <p>{{ $comic->description }}</p>
            <div class="mt-5 text-center">
                <a href="{{route('home')}}" class="btn btn-outline-light "  role="button" aria-disabled="true">Torna alla Home</a>
                <a class="btn btn-outline-light" href="{{route('comics.index')}}">Vai al DB !</a>
            </div>
        </div>
    </div>
</div>

@endsection