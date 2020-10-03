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
     * ウェア一覧を表示する
     * 
     * @return view
     */

    public function showWear()
    {
        $wears = Product::where('category','wear')->latest()->get();
        return view('yamadogu.wear',['wears'=>$wears]);
    }

    /**
     * シューズ一覧を表示する
     * 
     * @return view
     */

    public function showShoes()
    {
        $shoes = Product::where('category','shoes')->latest()->get();
        return view('yamadogu.shoes',['shoes'=>$shoes]);
    }

     /**
     * バッグ一覧を表示する
     * 
     * @return view
     */

    public function showBackpacks()
    {
        $bags = Product::where('category','bag')->latest()->get();
        return view('yamadogu.bag',['bags'=>$bags]);
    }
    
    /**
     * その他商品一覧を表示する
     * 
     * @return view
     */

    public function showVariousItems()
    {
        $tents = Product::where('category','goods')->latest()->get();
        return view('yamadogu.tent',['tents'=>$tents]);
    }
    
    /**
     * トップページを表示する
     * 
     * @return view
     */

    public function showIndex()
    {
        $products = Product::latest()->limit(6)->get();
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
        //idが存在しない場合はトップページへリダイレクトする
        if(is_null($product)){
            \Session::flash('err_msg','データがありません');
            return redirect(route('index'));
        }
        $photos = Photo::where('product_id',$id)->orderBy('id','asc')->get();
        return view('yamadogu.detail',['product'=>$product,'photos'=>$photos]);
    }
}
