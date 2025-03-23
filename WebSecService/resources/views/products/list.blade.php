@extends('layouts.master')

@section('title', 'Product List')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Product Catalog</h2>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/' . $product->photo) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text"><strong>Model:</strong> {{ $product->model }}</p>
                    <p class="card-text"><strong>Code:</strong> {{ $product->code }}</p>
                    <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
