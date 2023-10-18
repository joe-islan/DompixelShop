<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ProductService
{

    public function __construct(
        protected ProductRepositoryInterface $productRepository
    ){
    }

     /**
     * @param int|null $perPage
     * @return Collection<int, Product>|LengthAwarePaginator<Product>
     */
    public function getAllProducts(int $perPage = null): Collection|LengthAwarePaginator
    {
        return $this->productRepository->all($perPage);
    }

    public function getProductById(int $id): ?Product
    {
        return $this->productRepository->find($id);
    }

    /**
     * @param array<string, mixed> $attributes
     * @return Product
     */
    public function storeProduct(array $attributes): Product
    {
        return $this->productRepository->create($attributes);
    }

    /**
     * @param Product $product
     * @param array<string, mixed> $attributes
     * @return bool
     */
    public function updateProduct(Product $product, array $attributes): bool
    {
        return $this->productRepository->update($product, $attributes);
    }

    public function deleteProduct(Product $product): bool
    {
        return $this->productRepository->delete($product);
    }
}
