<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $findProduto = Product::all();
        return view('pages.produtos.paginacao', compact('findProduto'));
    }
}
