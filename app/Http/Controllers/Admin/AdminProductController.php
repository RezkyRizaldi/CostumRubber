<?php

namespace App\Http\Controllers\Admin;

use App\Admin\AdminProduct;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        DB::table('products')->insert([
            'product_name' => $request->product,
            'description' => $request->description,
            'image' => $request->file('image')->store('public'),
            'type' => $request->type,
            'price' => $request->price
        ]);
        return redirect('admin/product');
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
        DB::table('products')->update([
            'product_name' => $request->product,
            'description' => $request->description,
            'image' => $request->gambar,
            'type' => $request->type,
            'price' => $request->price
        ]);
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect('/admin/product');
    }
}
