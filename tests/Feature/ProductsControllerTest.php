<?php

namespace Tests\Feature;

use App\Http\Controllers\ProductsController;
use App\Services\Product\ProductService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->productService = $this->mock(ProductService::class);
    }

    /**
     * Testa o método index.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->productService->shouldReceive('all')->once()->andReturn([]);

        $response = $this->get('/api/products');

        $response->assertStatus(200);
    }

    /**
     * Testa o método store.
     *
     * @return void
     */
    public function testStore()
    {
        $this->productService->shouldReceive('store')->once()->andReturn([]);

        $response = $this->post('/api/products', [
            'code' => 'P001',
            'name' => 'Product 1',
            'price' => 10.0,
            'stock' => 5,
            'brand' => 'Brand 1'
        ]);

        $response->assertStatus(201);
    }

    /**
     * Testa o método edit.
     *
     * @return void
     */
    public function testEdit()
    {
        $this->productService->shouldReceive('findById')->once()->andReturn([]);

        $response = $this->get('/api/products/1');

        $response->assertStatus(200);
    }

    /**
     * Testa o método update.
     *
     * @return void
     */
    public function testUpdate()
    {
        $this->productService->shouldReceive('update')->once();

        $this->productService->shouldReceive('findById')->once()->andReturn([]);

        $response = $this->put('/api/products/1', [
            'code' => 'P001',
            'name' => 'Product 1',
            'price' => 10.0,
            'stock' => 5,
            'brand' => 'Brand 1'
        ]);

        $response->assertStatus(200);
    }

    /**
     * Testa o método destroy.
     *
     * @return void
     */
    public function testDestroy()
    {
        $this->productService->shouldReceive('destroy')->once();

        $response = $this->delete('/api/products/1');

        $response->assertStatus(200);
    }
}

