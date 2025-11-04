<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('product_index'), 403);
        $products = Product::paginate(5);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('product_create'), 403);
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->only(
            'nombre', 
            'tipo', 
            'graduacion_alcoholica', 
            'capacidad_ml', 
            'precio_unitario', 
            'stock_disponible', 
            'fecha_produccion', 
            'lote', 
            'estado', 
            'descripcion', 
        ));
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        abort_if(Gate::denies('product_show'), 403);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        abort_if(Gate::denies('product_edit'), 403);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->only(
            'nombre', 
            'tipo', 
            'graduacion_alcoholica', 
            'capacidad_ml', 
            'precio_unitario', 
            'stock_disponible', 
            'fecha_produccion', 
            'lote', 
            'estado', 
            'descripcion', 
        ));
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        abort_if(Gate::denies('product_destroy'), 403);
        $product->delete();
        return redirect()->route('products.index');
    }
}
