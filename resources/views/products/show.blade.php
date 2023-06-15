<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="mt-4">Product Details</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $product->name }}</p>
            <p><strong>Price:</strong> RP {{ $product->price }}</p>
            <p><strong>Stock:</strong> {{ $product->stock }}</p>
        </div>
    </div>
</div>

</body>
</html>
