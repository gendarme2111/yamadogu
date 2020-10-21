<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Photo;
use App\Http\Requests\ProductRequest;
// use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * 管理者画面を表示する
     * 
     * @return view
     */

    public function showAdmin()
    {
        return view('Admin.admin');
    }

    /**
     * 商品アップロード画面を表示する
     * 
     * @return view
     */

    public function showCreate()
    {
        return view('Admin.create');
    }

    public function index()
    {
        $products = Product::all();
        return view('Admin.admin',compact('products'));
    }

    public function create(ProductRequest $request)
    {
        //POST
        if($request->isMethod('POST')){
            
            //商品情報の保存

            $product = Product::create(['jan'=> $request->jan, 'name'=> $request->name,'maker'=> $request->maker, 
            'price'=> $request->price,'category'=> $request->category, 'title'=> $request->title,
            'detail'=> $request->detail]);

            foreach ($request->file('files') as $index=> $e) {
                
                $ext = $e['photo']->guessExtension();
                $filename = "{$request->jan}_{$index}.{$ext}";
                $path = $e['photo']->storeAs('photos', $filename);
                // photosメソッドにより、商品に紐付けられた画像を保存する
                $product->photos()->create(['path'=> "photos/".$filename]);

                if($index==0){
                    Product::where('jan',$product->jan)->update(['path'=> $path]);
                }
            }

            return redirect('Admin/admin')->with(['success'=> '保存しました！']);
        }
        //GET
        return view('Admin.create');
    }

    public function test(Request $request)
    {
        dd($request->all());
    }
}
