<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Services\Contracts\ProductServiceInterface;
use App\Services\Pricing\Contracts\PricingStrategyInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Validation\ValidationException;

class ProductService implements ProductServiceInterface
{
    private ProductRepositoryInterface $products;
    private PricingStrategyInterface $pricing;

    public function __construct(ProductRepositoryInterface $products, PricingStrategyInterface $pricing)
    {
        $this->products = $products;
        $this->pricing = $pricing;
    }

    public function list(int $perPage = 10): LengthAwarePaginator
    {
        return $this->products->paginateWithRelations($perPage);
    }

    public function create(array $validated): Product
    {
        $this->assertPriceInvariant($validated);
        $validated['price'] = $this->pricing->compute((float) $validated['price'], isset($validated['discount']) ? (float) $validated['discount'] : null);
        return $this->products->create($validated);
    }

    public function update(Product $product, array $validated): bool
    {
        $this->assertPriceInvariant($validated);
        $validated['price'] = $this->pricing->compute((float) $validated['price'], isset($validated['discount']) ? (float) $validated['discount'] : null);
        return $this->products->update($product, $validated);
    }

    public function get(int $id): Product
    {
        $product = $this->products->findById($id);
        if (!$product) {
            throw ValidationException::withMessages(['product' => 'Product not found']);
        }
        return $product;
    }

    private function assertPriceInvariant(array $data): void
    {
        if (isset($data['discount']) && ($data['discount'] < 0 || $data['discount'] > 100)) {
            throw ValidationException::withMessages(['discount' => 'Discount must be between 0 and 100']);
        }
        if (!isset($data['price']) || $data['price'] < 0) {
            throw ValidationException::withMessages(['price' => 'Price must be provided and non-negative']);
        }
    }
}



