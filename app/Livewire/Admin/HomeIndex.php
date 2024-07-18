<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Pedido;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeIndex extends Component
{
    public $ordersData = [];
    public $categoryData = [];

    public function mount()
    {
        // Obtener la cantidad de pedidos por mes
        $this->ordersData = Pedido::select(DB::raw('MONTH(created_at) as month'), DB::raw('count(*) as total'))
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        // Asegúrate de que todos los meses estén representados
        for ($i = 1; $i <= 12; $i++) {
            if (!isset($this->ordersData[$i])) {
                $this->ordersData[$i] = 0;
            }
        }
        ksort($this->ordersData);

        // Obtener la cantidad de productos por categoría
        $this->categoryData = Category::withCount('products')
            ->get()
            ->mapWithKeys(function ($category) {
                return [$category->name => $category->products_count];
            })
            ->toArray();

        // Calcular los porcentajes para el gráfico de dona
        $total = array_sum($this->categoryData);
        $this->categoryData = array_map(function ($value) use ($total) {
            return $total > 0 ? round(($value / $total) * 100, 2) : 0;
        }, $this->categoryData);
    }

    public function render()
    {
        $users = User::count();
        $categorias = Category::count();
        $productos = Product::count();
        $pedidos = Pedido::count();

        return view('livewire.admin.home-index', [
            'users' => $users,
            'categorias' => $categorias,
            'productos' => $productos,
            'pedidos' => $pedidos,
            'ordersData' => $this->ordersData,
            'categoryData' => $this->categoryData,
        ]);
    }
}
