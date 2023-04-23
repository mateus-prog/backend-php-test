<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {

        //dados fixos
        $this->call([
            ProductsTableSeeder::class,
        ]);

        //dados aleatórios
        \App\Models\Product::factory(5)->create();
    }
}
