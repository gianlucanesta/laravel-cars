@extends('layouts.app')

@section('main_content')

    <h1>Lista Cars</h1>

    @foreach ($cars as $car)
        <div class="container">
            <h2>
                <a href="{{ route('cars.show', ['car' => $car ->id]) }}">{{ $car->brand}}</a>
            </h2>
            <div>Tipo: {{ $car->model}}</div>
        </div>
    @endforeach

       
@endsection