<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Traits\TraitSeeder;
use App\Models\Product as Model;

class ProductsTableSeeder extends Seeder
{
    use TraitSeeder;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->smartySeeder(new Model, [
            ['id' => '1', 'code' => 'PY745', 'name' => 'Teste1', 'price' => 14.55, 'stock' => 30, 'brand' => 'Mercedes'],
            ['id' => '2', 'code' => 'PY756', 'name' => 'Teste2', 'price' => 10.99, 'stock' => 45, 'brand' => 'Ford'],
            ['id' => '3', 'code' => 'PY499', 'name' => 'Teste3', 'price' => 5.45, 'stock' => 100, 'brand' => 'Fiat'],
            ['id' => '4', 'code' => 'PY900', 'name' => 'Teste1 45', 'price' => 20.78, 'stock' => 3, 'brand' => 'Hyundai'],
            ['id' => '5', 'code' => 'PY908', 'name' => 'Teste1 34', 'price' => 14.78, 'stock' => 9, 'brand' => 'Volkswagen'],
        ]);
    }
}
