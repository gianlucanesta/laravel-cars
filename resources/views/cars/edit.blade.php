@extends('layouts.app')

@section('page_title')
    EDIT 
@endsection

    {{-- MESSAGE ERROR --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {{-- END MESSAGE ERROR --}}

@section('main_content')

<div class="container">
    <form action="{{route('cars.update',['car'=>$car->id])}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="brand" class="form-label">Brand</label>
          <input type="text" class="form-control" id="brand" name="brand" value="{{old('brand') ? old('brand') : $car->brand}}">
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="model" class="form-control" id="model" name="model" value="{{old('model') ? old('model') : $car->model}}">
          </div>

          <div class="mb-3">
            <label for="engine_displacement" class="form-label">Engine</label>
            <input type="text" class="form-control" id="engine_displacement" name="engine_displacement" value="{{old('engine_displacement') ? old('engine_displacement') : $car->engine_displacement}}">
          </div>

          <div class="mb-3">
            <label for="doors" class="form-label">Doors</label>
            <input type="text" class="form-control" id="doors" name="doors" value="{{old('doors') ? old('doors') : $car->doors}}">
          </div>

          <div class="mb-3">
            <label for="img" class="form-label">Pictures</label>
            <input type="text" class="form-control" id="img" name="img" value="{{old('img') ? old('img') : $car->img}}">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
@endsection