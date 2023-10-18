<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;;


interface ProductRepositoryInterface
{
    /**
     * @param int|null $perPage
     * @return Collection<int, Product>|LengthAwarePaginator<Product>
     */
    public function all(int $perPage = null): Collection|LengthAwarePaginator;

    /**
     * @param int $id
     * @return Product|null
     */
    public function find(int $id): ?Product;

    /**
     * @param array<string, mixed> $attributes
     * @return Product
     */
    public function create(array $attributes): Product;

    /**
     * @param Product $product
     * @param array<string, mixed> $attributes
     * @return bool
     */
    public function update(Product $product, array $attributes): bool;

    /**
     * @param Product $product
     * @return bool
     */
    public function delete(Product $product): bool;
}
