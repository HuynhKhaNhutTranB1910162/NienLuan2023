<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $productService;
    public function __construct(ProductService $productsService)
    {
        $this->productService=$productsService;
    }

    public function index($id = '' ){
        $product = $this->productService->show($id);
        return view('client.products.detail',[
            'title' => $product->name,
            'products' => $product
        ]);
    }
        

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {

        $product = Product::Where('name', 'LIKE', '%' . $request->searchs . '%')
            ->orwhere('price', 'LIKE', '%' . $request->searchs . '%')

            ->get();
        return view('client.products.search' ,compact('product'));
    }

}
