@extends('layouts.app')

@section('title', 'Create Product')


@section('content')
    @include('components.create-nav')
    <div class="container mx-5 my-5">
        <form class="row g-3 mt-5" method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="col-md-6">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                    placeholder="Enter Product name...">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

            <div class="col-md-6 m">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" value="{{ old('description') }}"
                    placeholder="Enter Product Description...">
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-12">
                <label class="form-label">Price</label>
                <input type="number" class="form-control " placeholder="Enter Product price..." name="price"
                    value="{{ old('price') }}">
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-12">
                <label class="form-label">Stock</label>
                <input type="number" class="form-control" placeholder="Enter Stock Quantity..." name="stock"
                    value="{{ old('stock') }}">
                @error('stock')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-12 mt-3 mb-3">
                <button type="submit" class="btn btn-primary">CREATE PRODUCT</button>
            </div>
        </form>
    </div>


@endsection
