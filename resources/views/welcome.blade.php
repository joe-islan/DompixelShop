<x-layouts.app-layout>
    <h1>Catálogo de Produtos</h1>
    <div class="container-fluid"> <!-- Adicionei esta div com a classe container-fluid -->
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">{{ $product->name }}</div>
                    <div class="card-body">
                        <h5 class="card-title">${{ $product->price }}</h5>
                        <p class="card-text"><strong>Stock Quantity:</strong> {{ $product->stock_quantity }}</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{ $products->links('pagination::bootstrap-4') }}
</x-layouts.app-layout>
