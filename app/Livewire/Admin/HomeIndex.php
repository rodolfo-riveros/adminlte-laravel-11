<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Pedido;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class HomeIndex extends Component
{
    public function render()
    {
        $users = User::count();
        $categorias = Category::count();
        $productos = Product::count();
        $pedidos = Pedido::count();

        return view('livewire.admin.home-index', compact('users', 'categorias', 'productos', 'pedidos'));
    }
}
