@extends('layouts.app')

@section('content')

<div class="container">

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
            <td>{{$comic->price}}</td>
            <td>{{$comic->description}}</td>
            <td>B</td>
          </tr>
        </tbody>
        @endforeach
      </table>

</div>

@endsection