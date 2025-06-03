@extends('layout')
@section('title', 'Product Details | madhu')
@section('content')
<!-- Product Details View - by madhu -->
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>{{ $product->name }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p><strong>Stock Quantity:</strong> {{ $product->stock_quantity }}</p>
                <p><strong>Created At:</strong> {{ $product->created_at->format('Y-m-d H:i') }}</p>
                <p><strong>Updated At:</strong> {{ $product->updated_at->format('Y-m-d H:i') }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection 
