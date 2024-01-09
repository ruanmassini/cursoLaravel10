<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\formRequestProduct;

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

    public function delete(Request $request)
    {
        $id = $request->id;
        $searchProduct = Product::find($id);
        $searchProduct->delete();
        return response()->json(['success' => true]);
    }

    public function create(formRequestProduct $request)
    {
        if($request->method() == "POST"){
            $data = $request->all();
            Product::create($data);
            return redirect()->route('productIndex');
        }else{
            return view('pages.produtos.create');
        }
    }
}
