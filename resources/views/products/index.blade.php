@extends('layout')
@section('title', 'Product List | madhu')
@section('content')
<!-- Product List with Search and Pagination - by madhu -->
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Products</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
</div>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<form method="GET" action="{{ route('products.index') }}" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search by name or description..." value="{{ request('search') }}">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
    </div>
</form>
<table class="table table-bordered table-hover">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->stock_quantity }}</td>
                <td>{{ $product->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7" class="text-center">No products found.</td></tr>
        @endforelse
    </tbody>
</table>
<!-- Pagination links - by madhu -->
<div>
    {{ $products->withQueryString()->links() }}
</div>
@endsection 
