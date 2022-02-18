@extends('layouts.app')

@section('main_content')

    {{-- <h1>{{ $car ->brand}}</h1> --}}

    {{-- {{ dd($car) }} --}}
    <div class="container">
        <div class="card" style="">
            <img src="{{ $car ->img}}" class="card-img-top" alt="{{ $car ->img}}" style="width:250px;">
            <div class="card-body">
                <h5 class="card-title">{{ $car ->brand}}</h5>
                <p class="card-text">Model: {{ $car ->model}}</p>
                <p class="card-text">Engine Displacement: {{ $car ->engine_displacement}}</p>
                <p class="card-text">Doors: {{ $car ->doors}}</p>
                <a href="{{route ('cars.edit', ['car' => $car->id])}}" class="btn btn-primary">Edit</a>

                <div>
                    <form action="{{ route('cars.destroy', ['car' => $car->id ])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this car?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection