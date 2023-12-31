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
            <th scope="col">Data</th>
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
            <td>{{$comic->sale_date}}</td>
            <td class="text-end">
              <a href="{{route('comics.show', $comic->id)}}"><i class="fa-solid fa-eye"></i></a>
              <a href="{{route('comics.edit', $comic->id)}}"><i class="fa-solid fa-pen-to-square text-warning"></i></a>
              <form action="{{route('comics.destroy', $comic->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare ?!?!?!?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn text-danger">
                  <i class="fa-solid fa-trash-can"></i>
                </button>
              </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>

</div>

@endsection