<x-layouts.app-layout>
    <h1>Add New Product</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <x-product-form>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Add Product</button>
            </div>
        </x-product-form>
    </form>
</x-layouts.app-layout>