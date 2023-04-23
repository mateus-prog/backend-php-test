<?php

namespace App\Http\Controllers;

use App\Http\HttpStatus;
use Illuminate\Http\Request;
use App\Services\Product\ProductService;
use App\Traits\ApiResponser;
use App\Traits\Pagination;
use Exception;

class ProductsController extends Controller
{
    use ApiResponser;
    use Pagination;

    protected $productService;

    public function __construct(
        ProductService $productService
    )
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $products = $this->productService->all();

            return $this->success($products, HttpStatus::SUCCESS);
        } catch (Exception $e) {
            return $this->error('Erro Interno', HttpStatus::SERVER_ERROR);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $input = $request->only(["code", "name", "price", "stock", "brand"]);
            $product = $this->productService->store($input);

            return $this->success($product, HttpStatus::CREATED);
        } catch (Exception $e) {
            return $this->error('Erro Interno', HttpStatus::SERVER_ERROR);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $product = $this->productService->findById($id);
            
            return $this->success($product, HttpStatus::SUCCESS);
        } catch (Exception $e) {
            return $this->error('Produto nao encontrado', HttpStatus::NOT_FOUND);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $input = $request->only(["code", "name", "price", "stock", "brand"]);
            $this->productService->update($id, $input);

            $product = $this->productService->findById($id);

            return $this->success($product, HttpStatus::SUCCESS);
        } catch (Exception $e) {
            return $this->error('Produto nao encontrado', HttpStatus::NOT_FOUND);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->productService->destroy($id);

            return $this->success('Produto deletado com sucesso', HttpStatus::SUCCESS);
        } catch (Exception $e) {
            return $this->error('Produto nao encontrado', HttpStatus::NOT_FOUND);
        }
    }
}
