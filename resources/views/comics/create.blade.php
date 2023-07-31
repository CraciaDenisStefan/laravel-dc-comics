@extends('layouts.app')

@section('content')

<div class="container text-white p-5">
    <h1 class="text-white">Inserisci un nuovo fumetto</h1>
    <form action="{{route('comics.store')}}" method="POST">
    @csrf
        <div class="form-group">
            <label class="control-label">Titolo</label>
            <input type="text" id="titolo" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Thumb</label>
            <input type="text" id="thumb" name="thumb" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Copertina</label>
            <input type="text" id="copertina" name="cover_image" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Prezzo</label>
            <input type="text" id="prezzo" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Serie</label>
            <input type="text" id="serie" name="series" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Data</label>
            <input type="text" id="data" name="sale_date" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Artisti</label>
            <input type="text" id="artisti" name="artist" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Scrittori</label>
            <input type="text" id="scrittori" name="writers" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Descrizzione</label>
            <textarea id="scrittori" name="description" class="form-control">
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