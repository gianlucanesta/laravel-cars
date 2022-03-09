@extends('layouts.app')

@section('main_content')

    <h1>Lista Cars</h1>

    <div class="container d-flex justify-content-center ">
        <div class="row row-col-3 ">
            @foreach ($cars as $car)
                
                <div class="card mt-4">
                    <img src="{{ $car ->img}}" class="card-img-top" alt="{{ $car ->img}}" style="width:250px;">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $car->brand }} {{ $car->model }}</h5>
                        
                        <a href="{{ route('admin.cars.show', ['car' => $car ->id]) }}">Entra</a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

       
@endsection