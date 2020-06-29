<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        
        return view('admin.product.product', compact('products'));
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
     * @param  \App\admin\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function show(AdminProduct $adminProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminProduct $adminProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminProduct $adminProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminProduct $adminProduct)
    {
        //
    }
}