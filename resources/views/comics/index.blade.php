@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between">
      <a class="btn btn-success p-2 m-5" href="{{route('comics.create')}}">Aggiungi un altro fumetto !</a>
      <a class="btn btn-success p-2 m-5" href="{{route('home')}}">Torna alla Home !</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Apri</th>
          </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
          <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>${{$comic->price}}</td>
            <td>{{$comic->description}}</td>
            <td class="text-end">
              <a href="{{route('comics.show', $comic->id)}}"><i class="fa-solid fa-eye"></i></a>
              <a href="{{route('comics.edit', $comic->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>

</div>

@endsection