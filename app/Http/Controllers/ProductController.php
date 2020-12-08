<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index() {
        $response = $this->productRepository->getAllProducts()->json();
        $data = $response['data'];
        return view('product.index', compact('data'));
    }
}
