<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Photo;
//セッションを使用する
use App\Http\Controllers\Controller,
    Session;

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
    
    /**
     * カート画面を表示する
     * @param int $id
     * @return view
     */

    public function showConfirm($id)
    {
        $item = Product::find($id);
        $item['orderNum'] = 1;
        if(Session::exists($item->jan)){
        
        }else{
            Session::put($item->jan,'true');
            session()->push('carts',$item);
            $count = session()->get('count');
            if($count==null){
                $count=1;
                session()->put('count',$count);
            }else{
                $count=$count +1;
                session()->put('count',$count);
            }
        // session()->put($item->jan,1);
        }
        // dd(Session::get($item->jan));
        // idが存在しない場合はトップページへリダイレクトする
        // if(is_null($item)){
        //     \Session::flash('err_msg','データがありません');
        //     return redirect(route('index'));
        // }
        return view('yamadogu.confirm');
    }
    public function sessionOut()
    {
        
        session()->flush();
        return view('yamadogu.confirm');
        session()->put('count',0);
    }

    // public function orderNumChange(Request $request)
    // {
    //     $value = $request->input('name');
        
    //     // dd(Session::get($item->jan));
    //     // idが存在しない場合はトップページへリダイレクトする
    //     if(is_null($products)){
    //         \Session::flash('err_msg','データがありません');
    //         return redirect(route('index'));
    //     }
    //     return view('yamadogu.confirm');
    // }

    public function orderNumChange(Request $request) {
        $orderNum = $request->orderNum;
        $jan = $request->jan;
        if($orderNum==0){
            $count = session()->get('count');
            $count=$count-1;
                session()->put('count',$count);
            foreach(Session::get('carts') as $cart){
            if($cart->jan == $jan){
                $cart->orderNum=0;
                Session::forget($jan);
            }else{

            }
        }
    
            return view('yamadogu.confirm');
        
        }else{
            foreach(Session::get('carts') as $cart){
                if($cart->jan == $jan){
                    $cart->orderNum=$orderNum;
                break;
                }else{
    
                }
            }
                // dd($cart->orderNum);
        return view('yamadogu.confirm');
    }
    }

    public function search(Request $request) {
        $search = $request->input('word');
        if ($search != '') {
            $products = Product::Where('maker','like','%'.$search.'%')->orWhere('name','like','%'.$search.'%')->
            orWhere('detail','like','%'.$search.'%')->orWhere('title','like','%'.$search.'%')->orderBy('id','desc')->get();
            // dd($products);
          }else {
            $products = Product::orderBy('id','asc')->get();
          }
        return view('yamadogu.search',['products'=>$products]);
}
        public function showCart()
        {
        return view('yamadogu.confirm');
        }
}