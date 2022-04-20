<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductDetails\StoreRequest;
use App\Http\Requests\ProductDetails\UpdateRequest;
use App\Http\Traits\ResourcesTrait;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductsDetailsController extends Controller
{
    use ResourcesTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.product-details.index', [
            'data' => ProductDetail::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.product-details.create', [
            'products' => \App\Models\Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        return $this->StoreAction($request, new ProductDetail());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ProductDetail $productDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductDetail $productDetail)
    {
        return view('pages.product-details.edit', [
            'productDetails' => ProductDetail::with('product')->get(),
            'products' => \App\Models\Product::all(),
            'data' => $productDetail
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, ProductDetail $productDetail)
    {
        return $this->UpdateAction($request, $productDetail);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductDetail $productDetail)
    {
        return $this->DeleteAction($productDetail);
    }
}
