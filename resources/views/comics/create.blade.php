@extends('layouts.app')

@section('content')

<div class="container text-white p-5">
    <h1 class="text-white">Inserisci un nuovo fumetto</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('comics.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label class="control-label">Titolo</label>
            <input type="text" id="titolo" name="title" class="form-control" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label class="control-label">Thumb</label>
            <input type="text" id="thumb" name="thumb" class="form-control" value="{{old('thumb')}}">
        </div>
        <div class="form-group">
            <label class="control-label">Copertina</label>
            <input type="text" id="copertina" name="cover_image" class="form-control" value="{{old('cover_image')}}">
        </div>
        <div class="form-group">
            <label class="control-label">Prezzo</label>
            <input type="text" id="prezzo" name="price" class="form-control" value="{{old('price')}}">
        </div>
        <div class="form-group">
            <label class="control-label">Serie</label>
            <input type="text" id="serie" name="series" class="form-control" value="{{old('series')}}">
        </div>
        <div class="form-group">
            <label class="control-label">Data</label>
            <input type="date" id="data" name="sale_date" class="form-control " value="{{old('sale_date')}}">
        </div>
        <div class="form-group">
            <label class="control-label">Artisti</label>
            <textarea id="scrittori" name="artist" class="form-control">{{old('artists')}}</textarea>
        </div>
        <div class="form-group">
            <label class="control-label">Scrittori</label>
            <textarea id="scrittori" name="writers" class="form-control">{{old('writers')}}</textarea>
        </div>
        <div class="form-group">
            <label class="control-label">Descrizzione</label>
            <textarea id="description" name="description" class="form-control">{{old('description')}}
            </textarea>
        </div>
        <div class="form-group mt-4">
            <button type="submit"  class="btn btn-primary">Salva</button>
        </div>
                
    </form>

    <div class="mt-5">
        <a href="{{route('home')}}" class="btn btn-outline-light "  role="button" aria-disabled="true">Torna alla Home</a>
        <a class="btn btn-outline-light" href="{{route('comics.index')}}">Vai al DB !</a>
    </div>

</div>


@endsection