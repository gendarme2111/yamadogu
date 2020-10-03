<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Photo;

class SiteController extends Controller
{
    /**
     * 新商品一覧を表示する
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
     * トップページを表示する
     * 
     * @return view
     */

    public function showIndex()
    {
        $products = Product::latest()->limit(6)->get();
        // dd($products);
        return view('yamadogu.index',['products'=>$products]);
    }

    /**
     * 商品詳細を表示する
     * @param int $id
     * @return view
     */

    public function showDetail($id)
    {
        $product = Product::find($id);
        // dd($product);
        //idが存在しない場合はトップページへリダイレクトする
        // if(is_null($product)){
            // \Session::flash('err_msg','データがありません');
            // return redirect(route('index'));
        // }
        $photos = Photo::where('product_id',$id)->orderBy('id','asc')->get();
        // dd($photos);
        return view('yamadogu.detail',['product'=>$product,'photos'=>$photos]);
    }
}
