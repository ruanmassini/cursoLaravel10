<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function __construct(Product $product)
    {
        $this->Product = $product;
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $findProduct = $this->Product->getProductsSearchIndex($search ?? '');

        return view('pages.produtos.paginacao', compact('findProduct'));
    }

    public function delete(Request $request){
        
    }
}
