<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);
        $categoryQuery = Category::query()->where('is_active', 1);

        return view('livewire.product', [
            'products' => $productQuery->paginate(6),
            'categories' => $categoryQuery->paginate(6),
        ]);
    }
}
