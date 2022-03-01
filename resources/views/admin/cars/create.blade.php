@extends('layouts.app')

@section('page_title')
    CREATE
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
        <form action="{{route('admin.cars.store')}}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
              <label for="brand" class="form-label">Brand</label>
              <input type="text" class="form-control" id="brand" name="brand" value="{{old('brand')}}">
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="model" class="form-control" id="model" name="model" value="{{old('model')}}">
              </div>

              <div class="mb-3">
                <label for="category_id" class="form-label">Categoria</label>
                <select class="form-select" id="category_id" name="category_id">
                    <option value="">Nessuna</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
              <h4>Optionals</h4>

              @foreach ($optionals as $optional)
                  <div class="form-check">
                      <input {{ in_array($optional->id, old('optionals', [])) ? 'checked' : '' }} class="form-check-input" type="checkbox" value="{{ $optional->id }}" id="optional-{{ $optional->id }}" name="optionals[]">
                      <label class="form-check-label" for="optional-{{ $optional->id }}">
                          {{ $optional->name }}
                      </label>
                  </div>
              @endforeach
              
            </div>

              <div class="mb-3">
                <label for="engine_displacement" class="form-label">Engine</label>
                <input type="text" class="form-control" id="engine_displacement" name="engine_displacement" value="{{old('engine_displacement')}}">
              </div>

              <div class="mb-3">
                <label for="doors" class="form-label">Doors</label>
                <input type="text" class="form-control" id="doors" name="doors" value="{{old('doors')}}">
              </div>

              <div class="mb-3">
                <label for="img" class="form-label">Pictures</label>
                <input type="text" class="form-control" id="img" name="img" value="{{old('img')}}">
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          
    </div>
@endsection