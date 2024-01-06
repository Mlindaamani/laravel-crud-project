@extends('layouts.app')

@section('title', 'Show Product')


@section('content')
    @include('components.create-nav')
    <form class="row g-3 mt-5" method="POST">
        <div class="col-md-6">
            <label class="form-label">Product Name</label>
            <input disabled readonly="text" class="form-control" name="name" value="{{ $product->name }}">
        </div>

        <div class="col-md-6 m">
            <label class="form-label">Description</label>
            <input disabled readonly="text" class="form-control" name="description" value="{{ $product->description }}">
        </div>

        <div class="col-12">
            <label class="form-label">Price</label>
            <input disabled readonly="number" class="form-control " placeholder="Enter Product price" name="price"
                value="{{ $product->price }}">
        </div>

        <div class="col-12 mb-3 ">
            <label class="form-label">Stock</label>
            <input disabled readonly type="number" class="form-control" placeholder="Enter Stock Quantity" name="stock"
                value="{{ $product->stock }}">
        </div>
    </form>

@endsection
