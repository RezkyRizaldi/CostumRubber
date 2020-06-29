<?php

namespace App\Http\Controllers\Admin;

use App\Admin\AdminHome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Product;
use App\About;
use App\Gallery;
class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->count();
        $products = Product::all()->count();
        return view('admin.home.home', compact('users', 'products'));
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
     * @param  \App\admin\AdminHome  $adminHome
     * @return \Illuminate\Http\Response
     */
    public function show(AdminHome $adminHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\AdminHome  $adminHome
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminHome $adminHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\AdminHome  $adminHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminHome $adminHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\AdminHome  $adminHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminHome $adminHome)
    {
        //
    }
}