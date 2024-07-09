<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductSinglePage extends Component
{

    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);

        return view('livewire.product-single-page', [
            'product' => Product::where('slug', $this->slug)->firstOrFail(),
            'products' => $productQuery->paginate(6),

        ]);
    }
}
