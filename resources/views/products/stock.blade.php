<!DOCTYPE html>
<html>
<head>
    <title>Update Product Stock</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="mt-4">Update Product Stock</h1>

    <form method="POST" action="{{ route('products.updateStock', $product->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="stock">New Stock:</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock') }}" required>
            @error('stock')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Stock</button>
    </form>
</div>

</body>
</html>
