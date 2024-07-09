<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);
        return view('livewire.product', [
            'products' => $productQuery->paginate(6),
        ]);
    }
}
