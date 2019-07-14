<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::where('status', '1')->get();
        return view ('pages.product.product',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $image = $request->file('gambar');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = public_path('/uploads/produk');
        $image->move($path,$filename);


        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->rasa = $request->rasa;
        $produk->harga = $request->harga;
        $produk->gambar = $filename;
        $produk->save();

        return redirect()->route('produk');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('pages.product.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $produk = Produk::find($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->rasa = $request->rasa;
        $produk->harga = $request->harga;

        $image = $request->file('gambar');
        if ($image == '') {
            $produk->gambar = $request->old_gambar;
        } else {        
            $filename = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('/uploads/produk');
            $image->move($path,$filename);
            $produk->gambar = $filename;
        }

        //dd($request->all());

        $produk->update();
        return redirect()->route('produk');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->update(['status' => '0']);
        return redirect()->route('produk');
    }
}
