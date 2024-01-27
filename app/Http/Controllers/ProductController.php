<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = ['name'=>'index','peyload' => Product::all()];
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $field = $request->validate([
            "pd_name"=>"required|string",
            "pd_type"=>"required|integer",
            "pd_price"=>"required|double"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $peyload = ['name'=>'show','peyload' => Product::find($id)];
        return $peyload;
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
}
