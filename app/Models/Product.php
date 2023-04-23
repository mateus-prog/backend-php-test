<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

use App\Traits\TraitBuilder;
use App\Traits\TraitCollection;

class Product extends BaseModel
{
    use TraitCollection, TraitBuilder, HasFactory;

    public $table = 'products';
	public $fillable = [
        'code', 'name', 'price', 'stock', 'brand'
    ];
	public $searchable = [
        'code', 'name', 'price', 'stock', 'brand'
    ];

    public $timestamps = false;

    public function format()
    {
        return (object) [
            "id" => $this->id,
            "code" => $this->code,
            "name" => $this->name,
            "price" => $this->price,
            "stock" => $this->stock,
            "brand" => $this->brand,
        ];
    }
}