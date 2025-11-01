<?php

namespace App\Services\Contracts;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ProductServiceInterface
{
    public function list(int $perPage = 10): LengthAwarePaginator;

    public function create(array $validated): Product;

    public function update(Product $product, array $validated): bool;

    public function get(int $id): Product;
}



