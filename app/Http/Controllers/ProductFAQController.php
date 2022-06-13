<?php

namespace App\Http\Controllers;

use App\Models\ProductFAQ;
use Illuminate\Http\Request;

class ProductFAQController extends Controller
{


    function onSelectAll(){
        $result = ProductFAQ::all();
        return $result;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\ProductFAQ  $productFAQ
     * @return \Illuminate\Http\Response
     */
    public function show(ProductFAQ $productFAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductFAQ  $productFAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductFAQ $productFAQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductFAQ  $productFAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductFAQ $productFAQ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductFAQ  $productFAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductFAQ $productFAQ)
    {
        //
    }
}
