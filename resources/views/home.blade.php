@extends('layouts.app')

@section('content')

<div class="container p-5">

    <h1 class="text-white">Per vedere il Data Base dei fumetti clicca sotto:</h1>

    <a class="btn btn-primary p-3" href="{{route('comics.index')}}">Vai al DB !</a>

</div>

@endsection