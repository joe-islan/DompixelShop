<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ProductFormRequest;
use Exception;

class ProductController extends Controller
{
    public function __construct(
        private ProductService $productService,
    ) {
    }

    public function index(): View | RedirectResponse
    {
        try {
            $products = $this->productService->getAllProducts();
            return view('products.index', ['products' => $products]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to fetch products. ' . $e->getMessage());
        }
    }

    public function productCatalog(): View | RedirectResponse
    {
        try {
            $products = $this->productService->getAllProducts(3);
            return view('welcome', ['products' => $products]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to fetch product catalog. ' . $e->getMessage());
        }
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(ProductFormRequest $request): RedirectResponse
    {
        try {
            $this->productService->storeProduct($request->all());
            return redirect()->route('products.index')->with('success', 'Product saved successfully!');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Failed to save product. ' . $e->getMessage());
        }
    }

    public function show(Product $product): View
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product): View
    {
        return view('products.edit')->with('product', $product);
    }

    public function update(ProductFormRequest $request, Product $product): RedirectResponse
    {
        try {
            $this->productService->updateProduct($product, $request->all());
            return redirect()->route('products.index')->with('success', 'Product updated successfully!');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Failed to update product. ' . $e->getMessage());
        }
    }

    public function destroy(Product $product): RedirectResponse
    {
        try {
            $this->productService->deleteProduct($product);
            return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
        } catch (Exception $e) {
            return back()->with('error', 'Failed to delete product. ' . $e->getMessage());
        }
    }
}
