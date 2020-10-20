<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Photo;
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
        return view('yamadogu.Admin.admin');
    }

    /**
     * 商品アップロード画面を表示する
     * 
     * @return view
     */

    public function showCreate()
    {
        return view('yamadogu.Admin.create');
    }

    public function index()
    {
        $items = Item::all();
        return view('yamadogu.Admin.index',compact('items'));
    }

    public function create(Request $request)
    {
        //POST
        if($request->isMethod('POST')){
            dd($request->all());
        }
        //GET
        return view('yamadogu.Admin.create');
    }
}
