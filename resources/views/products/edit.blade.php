<x-layouts.app-layout>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <x-product-form :name="$product->name" :description="$product->description" :price="$product->price" :quantity="$product->stock_quantity">
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update Product</button>
            </div>
        </x-product-form>
    </form>
</x-layouts.app-layout>