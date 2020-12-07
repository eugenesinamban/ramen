<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;
use App\Models\Product;

class ProductRepository
{
    protected $product;
    protected $host;

    public function __construct(Product $product)
    {
        $this->product = $product;
        $this->host = env('ADMIN_URL');
    }

    public function getAllProducts() {
        dd($this->product);
        return Http::get($this->host);
    }

}