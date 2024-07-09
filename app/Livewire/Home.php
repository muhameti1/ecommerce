<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $products = Product::query()->where('is_featured', 1);
        return view('livewire.home', [
            'products' => $products->paginate(6),
        ]);
    }
}
