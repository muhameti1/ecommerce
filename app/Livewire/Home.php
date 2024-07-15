<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $products = Product::query()->where('is_featured', 1);
        $categoryQuery = Category::query()->where('is_active', 1);
        $productsOnSale = Product::where('on_sale', 1);

        return view('livewire.home', [
            'products' => $products->paginate(6),
            'categories' => $categoryQuery->paginate(6),
            'productsOnSale' => $productsOnSale->paginate(6)
        ]);
    }
}
