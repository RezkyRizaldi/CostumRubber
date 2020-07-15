<?php

namespace App\Http\Controllers\Admin;

use App\Admin\AdminProduct;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DataTables;

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
        if ($files = $request->file('image')) {
            $name = $files->getClientOriginalName();
            $files->move('admin/image', $name);
            DB::table('products')->insert([
                'product_name' => $request->product_name,
                'image' => $name,
                'description' => $request->description,
                'type' => $request->type,
                'price' => $request->price
            ]);
        }
        return redirect()->back()->with('message', 'Successfully Save Your Image file.');
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
    public function edit($id)
    {
        $products = DB::table('products')->where('id', $id)->get();
        return view('admin.partials.product.edit-product', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $messages = [
        //     'required' => ':attribute wajib diisi',
        //     'min' => ':attribute minimal :min karakter'
        // ];

        $this->validate($request, array(
            'product_name' => 'required|min:5',
            'type' => 'required',
            'description' => 'required|min:5',
            'price' => 'required|int',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ));
        function () {
            if (request()->has('image')) {
                request()->validate([
                    'image' => 'file|image|max:5000'
                ]);
            }
        };

        if ($files = $request->file('image')) {
            $name = $files->getClientOriginalName();
            $files->move('admin/image', $name);
            $image = $request->$name;
            $product_name = $request->product_name;
            $description = $request->description;
            $type = $request->type;
            $price = $request->price;

            $data = array('product_name' => $product_name, 'image' => $name, 'description' => $description, 'type' => $type, 'price' => $price);
            DB::table('products')->where('id', $id)->update($data);
        }
        return redirect('/admin/product')->with('message', 'Successfull Save Your Image file.');
        // return $request;
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
