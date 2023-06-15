<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="mt-4">Create Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>


        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock:</label>
            <input type="number" name="stock" id="stock" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>

</body>
</html>
