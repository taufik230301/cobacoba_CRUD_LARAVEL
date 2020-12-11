<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    //    $product = new Product;
    //    $product->nama_produk = $request->nama_produk;
    //    $product->harga_satuan = $request->harga_satuan;
    //     $product->save();


        // Product::create([
        //     'nama_produk' => $request->nama_produk,
        //     'harga_satuan' => $request->harga_satuan
        // ]);

        $request->validate([
            'nama_produk' => 'required',
            'harga_satuan' => 'required'
        ]);    

        Product::create($request->all());
        return redirect('/products')->with('status', 'Data Produk Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
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

        Product::where('id', $product->id)
                ->update([
                    'nama_produk' => $request->nama_produk,
                    'harga_satuan' => $request->harga_satuan
                ]);
                return redirect('/products')->with('status', 'Data Produk Telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/products')->with('status_delete', 'Data Produk Telah Dihapus!');
    }
}
