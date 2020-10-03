<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Photo;

class SiteController extends Controller
{
    /**
     * 新商品一覧を標示する
     * 
     * @return view
     */

    public function showNewProducts()
    {
        $products = Product::latest()->get();
        // dd($products);
        return view('yamadogu.new',['products'=>$products]);
    }

    /**
     * トップページを標示する
     * 
     * @return view
     */

    public function showIndex()
    {
        $products = Product::latest()->limit(6)->get();
        // dd($products);
        return view('yamadogu.index',['products'=>$products]);
    }
}
