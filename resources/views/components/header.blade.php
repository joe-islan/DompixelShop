<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <x-logo />
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ request()->routeIs('productCatalog') ? 'active' : '' }}"> <!-- Modificado aqui -->
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{ request()->routeIs('products.index') ? 'active' : '' }}"> <!-- e aqui -->
                <a class="nav-link" href="{{route('products.index')}}">Products</a>
            </li>
        </ul>
    </div>
</nav>
