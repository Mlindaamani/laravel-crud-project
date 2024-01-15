@extends('layouts.app')

@section('title', 'Edit Product')


@section('content')
    @include('components.create-nav')
    <form class="row g-3 mt-5" method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('put')
        <div class="col-md-6">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="col-md-6 m">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description" value="{{ $product->description }}">
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="col-12">
            <label class="form-label">Price</label>
            <input type="number" class="form-control " placeholder="Enter Product price" name="price"
                value="{{ $product->price }}">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="col-12">
            <label class="form-label">Stock</label>
            <input type="number" class="form-control" placeholder="Enter Stock Quantity" name="stock"
                value="{{ $product->stock }}">
            @error('stock')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-12 mt-3 mb-3">
            <button type="submit" class="btn btn-primary">UPDATE PRODUCT</button>
        </div>
    </form>

@endsection
