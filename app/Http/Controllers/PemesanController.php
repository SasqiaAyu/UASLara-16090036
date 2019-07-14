<?php

namespace App\Http\Controllers;

use App\Pemesan;
use App\Produk;
use App\Customer;

use Illuminate\Http\Request;

class PemesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk=Produk::all();
        $customer=Customer::all();
        $pesanan=Pemesan::where('status','1')->get();
        return view('pages.pesan-masuk.pesan-masuk', compact('produk', 'customer', 'pesanan'));
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
     * @param  \App\Pemesan  $pemesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesan $pemesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pemesan  $pemesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesan $pemesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pemesan  $pemesan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesan $pemesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemesan  $pemesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesan $pemesan)
    {
        //
    }
}
