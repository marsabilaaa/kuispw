<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="mt-4">All Products</h1>

    <div class="my-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
        <a href="{{ route('products.available') }}" class="btn btn-success">Available Products</a>
        <a href="{{ route('products.unavailable') }}" class="btn btn-danger">Unavailable Products</a>
    </div>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>Rp {{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{ route('products.stock', $product->id) }}" class="btn btn-primary btn-sm">Stock</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
