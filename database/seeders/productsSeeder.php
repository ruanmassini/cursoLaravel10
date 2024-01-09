<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nome' => 'Caixas Dágua',
            'valor' => '15.99'
        ]);
        Product::create([
            'nome' => 'Cimento',
            'valor' => '50.99'
        ]);
        Product::create([
            'nome' => 'Carrinho de mão',
            'valor' => '80.00'
        ]);
        Product::create([
            'nome' => 'Maçaneta',
            'valor' => '20.00'
        ]);
        Product::create([
            'nome' => 'Maçavó',
            'valor' => '10.00'
        ]);
    }
}
