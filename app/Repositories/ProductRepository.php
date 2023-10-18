<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @param int|null $perPage
     * @return Collection<int, Product>|LengthAwarePaginator<Product>
     */
    public function all(int $perPage = null): Collection|LengthAwarePaginator
    {
        if ($perPage) {
            return Product::paginate($perPage);
        }

        return Product::all();
    }

    /**
     * @param int $id
     * @return Product|null
     */
    public function find(int $id): ?Product
    {
        return Product::find($id);
    }


    /**
     * @param array<string, mixed> $attributes
     * @return Product
     */
    public function create(array $attributes): Product
    {
        return Product::create($attributes);
    }


    /**
     * @param Product $product
     * @param array<string, mixed> $attributes
     * @return bool
     */
    public function update(Product $product, array $attributes): bool
    {
        return $product->update($attributes);
    }

    /**
     * @param Product $product
     * @return bool
     */
    public function delete(Product $product): bool
    {
        return (bool) $product->delete();
    }

}
