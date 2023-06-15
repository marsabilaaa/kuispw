<!-- delete.blade.php -->

<h1>Delete Product</h1>

<p>Are you sure you want to delete the product: {{ $product->name }}?</p>

<form method="POST" action="{{ route('products.destroy', $product->id) }}">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>
