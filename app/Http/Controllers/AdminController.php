<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
