<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Repositories\ProductRepository;

class PageController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index() {
        $response = $this->productRepository->getAllProducts()->json();
        dd($response);
    }
}
