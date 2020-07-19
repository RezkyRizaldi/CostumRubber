<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.product', ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $products = Product::where('slug', $slug)->first();
        return view('product.details-product', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function search(Request $request)
    {

        $search = $request->get('istilah');
        $result = Product::where('product_name', 'LIKE', '%' . $search . '%')->get();
        return response()->json($result);
    }
    public function search_product(Request $request)
    {
        $search = $request->search_product;
        $products = Product::where('product_name', 'LIKE', '%' . $search . '%')->get();
        return view('product.product', ["products" => $products]);
        // dd($products);
    }
    public function filter(Request $request)
    {
        $filter = $request->get('istilah');
        $result = Product::where('type', 'LIKE', '%' . $filter . '%')->get();
        return response()->json($result);
    }
    public function filter_product(Request $request)
    {
        $filter = $request->filter_product;
        $products = Product::where('type', 'LIKE', '%' . $filter . '%')->get();
        return view('product.product', ["products" => $products]);
    }
}