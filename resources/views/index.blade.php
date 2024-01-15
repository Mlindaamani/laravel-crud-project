@extends('layouts.app')

@section('title', 'Products')

@section('content')
    @include('components.nav-bar')
    <table class="table table-bordered text-start w-75 m-auto mt-lg-5 shadow mt-5">
        <thead>
            <tr>
                <th scope="col" class="bg-success-subtle text-center">Product Name</th>
                <th scope="col" class="bg-success-subtle text-center">Description</th>
                <th scope="col" class="bg-success-subtle ">Price</th>
                <th scope="col" class="text-center bg-success-subtle">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td> 💲 {{ $product->price }}</td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('products.show', $product->id) }}"
                                class="btn  btn-sm fw-bold fs-6 shadow">👀</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm fw-bold shadow">✏</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn fw-bold bg-none fs-6 shadow showing mt-2"
                                    onclick="return confirm('Are you sure you want to delete the {{ $product->name }} 🤔')">❌</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
