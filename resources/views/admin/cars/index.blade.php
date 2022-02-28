@extends('layouts.app')

@section('main_content')

    <h1>Lista Cars</h1>

    @foreach ($cars as $car)
        {{-- <div class="container">
            <h2>
                <a href="{{ route('admin.cars.show', ['car' => $car ->id]) }}">{{ $car->brand}}</a>
            </h2>
            <div>Tipo: {{ $car->model}}</div>
        </div> --}}

        <div class="col-2">
            <div class="card mt-4">
                <img src="{{ $car ->img}}" class="card-img-top" alt="{{ $car ->img}}" style="width:250px;">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{ $car->brand }} {{ $car->model }}</h5>
                    
                    <a href="{{ route('admin.cars.show', ['car' => $car ->id]) }}">Entra</a>
                </div>
            </div>
        </div>


    @endforeach

       
@endsection