<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{   
    // function onSelectFour(){
    //     $result = Product::limit(4)->get();
    //     return $result;

    // }
    function onSelectFour(){
        $result = Product::select('id','image_links','titles','subtitles','current_prices')->get();
        return $result;

    }
    // function onSelectAll(){
    //     $result = Product::all();
    //     return $result;

    // }
    
    function onSelectDetails($productId){
    // function onSelectDetails(Request $req){
        // $id = $req->getContent();
        // $id = $req->input('id');
        
        $result = Product::where(['id'=>$productId])->get();
        return $result;


    }
}
