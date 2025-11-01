<?php

namespace App\Repositories\Contracts;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ProductRepositoryInterface
{
    public function paginateWithRelations(int $perPage = 10): LengthAwarePaginator;

    public function create(array $attributes): Product;

    public function update(Product $product, array $attributes): bool;

    public function findById(int $id): ?Product;

    public function findBySlug(string $slug): ?Product;
}



